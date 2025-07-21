<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Quote;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function dashboard()
    {

        // $userCount = User::count(); // Count the number of users
        // return view('admin.dashboard', compact('userCount'));

        $userCount = User::count(); // Total users
        $roleCount = Role::count(); // Total roles
        $permissionCount = Permission::count(); // Total permissions
        $productCount = Product::count(); // Total product
        $categoryCount = Category::count(); // Total roles
        $superAdminCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'Super Admin');
        })->count(); // Count users with 'Super Admin' role

        // Get today's date
        $today = Carbon::today();

        // Count contacts where created_at is today
        $today_contact_count = Contact::whereDate('created_at', $today)->count();
        // $today_order_count = Quote::whereDate('created_at', $today)->count();

        // $chartData = [
        //     'Users' => $userCount,
        //     'Roles' => $roleCount,
        //     'Permissions' => $permissionCount,
        //     'Super Admins' => $superAdminCount,
        // ];

        // $roleData = Role::withCount('permissions')->get();
        // $roles = $roleData->pluck('name');
        // $permissionsPerRole = $roleData->pluck('permissions_count');
        // $userGrowth = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
        //     ->groupBy('date')
        //     ->orderBy('date', 'ASC')
        //     ->get();


        // $rolescounts = Role::withCount('users')->get(); // Get roles with user count


        // $totalPermissions = $permissionsPerRole->sum(); // Get total permissions count

        return view('admin.dashboard', compact('userCount', 'productCount', 'roleCount', 'superAdminCount', 'categoryCount', 'today_contact_count'));
    }


    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.auth.login');
    }

    // public function login_validate(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     // Validate the request data
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|string',
    //     ]);

    //     // Check if the user exists with the given email
    //     $user = User::where('email', $request->email)->first();

    //     if (!$user) {
    //         return redirect()->back()->withErrors('error', 'Invalid credentials. Please try again.');
    //     }

    //     // Check if the user's account is inactive
    //     if ($user->status == 0) {
    //         return redirect()->back()->withErrors('error', 'Your account is inactive. Please contact support.');
    //     }

    //     // Attempt to authenticate the user
    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed
    //         return redirect()->route('dashboard')->with('success', 'Login Successfully');
    //     } else {
    //         // Authentication failed
    //         return redirect()->back()->withErrors('error', 'Invalid credentials. Please try again.');
    //     }
    // }
    public function login_validate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Check if the user exists with the given email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials. Please try again.']);
        }

        // Check if the user's account is inactive
        if ($user->status == 0) {
            return redirect()->back()->withErrors(['email' => 'Your account is inactive. Please contact support.']);
        }

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials. Please try again.']);
        }
    }


    // forget_password
    public function  forgot_password()
    {
        if (Auth::check()) {

            return redirect()->route('dashboard');
        }

        return view('admin.auth.passwords.forgot_password');
    }

    // public function forgot_validate(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users,email',
    //     ]);

    //     $user = User::where('email', $request->email)->first();

    //     if (!$user) {
    //         return back()->with('error', 'Invalid user. Please try again.');
    //     }
    //     $otp = rand(100000, 999999); // Generate 6-digit OTP
    //     $otpExpiresAt = now()->addMinutes(10); // OTP expires in 10 minutes

    //     // Store OTP in database
    //     $user->otp = $otp;
    //     $user->otp_expires_at = $otpExpiresAt;
    //     $user->save();

    //     // Send OTP via email
    //     Mail::to($user->email)->send(new ForgotPasswordMail($otp, $user));

    //     // Store email in session for verification
    //     session(['forgot_email' => $user->email]);

    //     return redirect()->route('otp.verify')->with('success', 'An OTP has been sent to your email.');
    // }
    public function forgot_validate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Invalid user. Please try again.'])->withInput();
        }

        // Check if the user is active (assuming 'status' column: 1 = active, 0 = inactive)
        if ($user->status == 0) {
            return back()->withErrors(['email' => 'Your account is inactive. Please contact support.'])->withInput();
        }
        $otp = rand(100000, 999999); // Generate 6-digit OTP
        $otpExpiresAt = now()->addMinutes(10); // OTP expires in 10 minutes

        // Store OTP in database
        $user->otp = $otp;
        $user->otp_expires_at = $otpExpiresAt;
        $user->save();

        // Send OTP via email
        Mail::to($user->email)->send(new ForgotPasswordMail($otp, $user));

        // Store email in session for verification
        session(['forgot_email' => $user->email]);

        return redirect()->route('otp.verify')->with('success', 'An OTP has been sent to your email.');
    }

    public function otp_verify()
    {
        return view('admin.auth.passwords.otp_verify');
    }

    public function otp_validate(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $email = session('forgot_email');

        if (!$email) {
            return redirect()->route('forgot_password')->with('error', 'Session expired. Please try again.');
        }

        $user = User::where('email', $email)->first();

        if (!$user || $user->otp !== $request->otp) {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }

        if (now()->greaterThan($user->otp_expires_at)) {
            return redirect()->route('forgot_password')->with('error', 'OTP has expired. Please request a new one.');
        }

        // OTP is correct, allow password reset
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        session(['otp_verified' => true]);

        return redirect()->route('reset_password');
    }

    public function otp_resend()
    {
        $email = session('forgot_email');

        if (!$email) {
            return response()->json(['error' => 'No email found in session.'], 400);
        }

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        $otp = rand(100000, 999999); // Generate 6-digit OTP
        $otpExpiresAt = now()->addMinutes(10); // OTP expires in 10 minutes

        // Store OTP in database
        $user->otp = $otp;
        $user->otp_expires_at = $otpExpiresAt;
        $user->save();

        // Send OTP via email
        Mail::to($user->email)->send(new ForgotPasswordMail($otp, $user));

        // Store email in session for verification
        session(['forgot_email' => $user->email]);

        return response()->json(['success' => 'An OTP has been sent to your email.']);
    }

    public function reset_password()
    {
        return view('admin.auth.passwords.reset_password');
    }
    public function reset_validate(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (!session('otp_verified')) {
            return redirect()->route('forgot_password')->withErrors(['error' => 'Unauthorized access.']);
        }

        $email = session('forgot_email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('forgot_password')->withErrors(['error' => 'User not found.']);
        }

        // Update password securely
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Clear session data
        session()->forget(['forgot_email', 'otp_verified']);

        return redirect()->route('login')->with('success', 'Password reset successfully. Please log in.');
    }




    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->to(route('login'));
    }
}
