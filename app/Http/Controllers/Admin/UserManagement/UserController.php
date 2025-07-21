<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function getUsers()
    {
        // $users = User::with('roles.permissions')->orderBy('created_at', 'ASC')->get();

        $users = User::where('id', '!=', 1)->orderBy('created_at', 'ASC')->get();
        $data = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => $user->roles->pluck('name')->implode(', '), // Get role names
                'status' => $user->status,
            ];
        });

        return response()->json(['data' => $data]);
    }
    public function index()
    {
        $userCount = User::count(); // Total users
        $roleCount = Role::count(); // Total roles
        $permissionCount = Permission::count(); // Total permissions
        $superAdminCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'Super Admin');
        })->count(); // Count users with 'Super Admin' role

        $chartData = [
            'Users' => $userCount,
            'Roles' => $roleCount,
            'Permissions' => $permissionCount,
            'Super Admins' => $superAdminCount,
        ];

        $roleData = Role::withCount('permissions')->get();
        $roles = $roleData->pluck('name');
        $permissionsPerRole = $roleData->pluck('permissions_count');
        $userGrowth = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();


        $rolescounts = Role::withCount('users')->get(); // Get roles with user count


        $totalPermissions = $permissionsPerRole->sum(); // Get total permissions count

        return view('admin.user_management.user.index', compact('chartData', 'roles', 'permissionsPerRole', 'totalPermissions'));
    }


    public function create()
    {
        $roles = Role::pluck('name', 'id')->all(); // Fetch role IDs as keys
        return view('admin.user_management.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required ',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id', // Ensure each selected role ID exists
            'status' => 'required|in:0,1',
        ]);

        // Hash password
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['type'] = 'admin';

        // Create user
        $user = User::create($validatedData);

        // Assign roles
        $user->roles()->sync($request->input('roles')); // Use sync() instead of attach()

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }



    public function edit($id)
    {
        $user = User::find($id);

        $roles = Role::pluck('name', 'name')->all();

        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.user_management.user.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'roles' => 'required', // Ensure the role is selected
            'status' => 'required',
        ]);
        // dd($request);
        try {
            $input = $request->except(['password']); // Avoid overwriting the password unless provided

            // Find the user by ID
            $user = User::findOrFail($id);

            // Update user details
            $user->update($input);

            // Remove existing roles and assign the new role
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $user->assignRole($request->input('roles'));

            return redirect()->route('user.index')->with('success', 'User updated successfully');
        } catch (\Spatie\Permission\Exceptions\RoleDoesNotExist $e) {
            // Specific exception for invalid roles
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['roles' => 'The selected role does not exist.']);
        } catch (\Exception $e) {
            // General exception for unexpected errors
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['general' => 'Something went wrong. Please try again.']);
        }
    }
    public function delete(string $id)
    {
        $user = User::find($id);

        $user->delete();

        if (!$user) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        return response()->json(['success' => 'User deleted successfully!']);
    }
}
