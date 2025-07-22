<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormSubmitted;
use App\Mail\QuoteFormSubmitted;
use App\Models\Category;
use App\Models\Contact;
use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\Product;
use App\Models\Product_Image;
use App\Models\ProductFeature;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        $products = Product::take(6)->get(); // Fetch only up to 6 products


        return view('user.home', compact('categories', 'products'));
    }

    public function about()
    {
        $categories = Category::all(); // Fetch all categories
        return view('user.about', compact('categories'));
    }

    public function service()
    {
        $categories = Category::all(); // Fetch all categories
        return view('user.services', compact('categories'));
    }

    public function product()
    {
        // $categories = Category::all(); // Fetch all categories
        $categories = Category::withCount('products')->get(); // Includes product count for each category
        $products = Product::all(); // Fetch all products

        return view('user.product', compact('categories', 'products'));
    }

    // gallery

    public function gallery()
    {
        $categories = Category::all(); // Fetch all categories
        $gallery_categories = GalleryCategory::all();
        $gallery_images = GalleryImage::with('category')->where('status', 1)->get();

        return view('user.gallery', compact('categories', 'gallery_categories', 'gallery_images'));
    }

    public function product_details($slug)
    {
        $categories = Category::all(); // Fetch all categories

        // Fetch product using slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // Use product ID to get images and features
        $product_images = Product_Image::where('product_id', $product->id)->get();
        $product_feature = ProductFeature::where('product_id', $product->id)->get();

        // Fetch related products based on category, excluding the current product
        $related_products = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get();

        return view('user.product_details', compact('categories', 'product', 'product_images', 'product_feature', 'related_products'));
    }


    public function categoryProducts($name)
    {
        // Fetch category by name
        $category = Category::where('name', $name)->firstOrFail();

        // Fetch products where category_id matches and status is active
        $products = Product::where('category_id', $category->id)
            ->where('status', 1)
            ->get();

        // Fetch all categories
        $categories = Category::all();

        // Return the category product view
        return view('user.category_products', compact('category', 'products', 'categories'));
    }


    // quote
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10', // Ensures phone number has exactly 10 digits
            'message' => 'nullable|string',
        ], [
            'phone.digits' => 'The phone number must be exactly 10 digits.', // Custom error message
        ]);

        $quote_info =  Quote::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $adminEmail = env('MAIL_USERNAME', 'sangeeswty4@gmail.com'); // Fetch the admin email from the .env file
        // Send email to admin or default email
        Mail::to($adminEmail)->send(new QuoteFormSubmitted($quote_info));

        return response()->json(['success' => 'Quote submitted successfully!']);
    }


    public function contact()
    {
        $categories = Category::all(); // Fetch all categories
        return view('user.contact', compact('categories'));
    }

    public function contactstore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_no' => 'required|digits:10',
            'subject' => 'required|string',
            'enquiry' => 'required|string',
        ]);

        try {
            // Create a new contact entry
            $contact_info = Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile_no' => $request->input('mobile_no'),
                'subject' => $request->input('subject'),
                'enquiry' => $request->input('enquiry'),
            ]);

            $adminEmail = env('MAIL_USERNAME', 'sangeeswty4@gmail.com');
            Mail::to($adminEmail)->send(new ContactFormSubmitted($contact_info));

            return response()->json([
                'success' => true,
                'message' => 'Contact From Submitted Successfully. Our team will contact you soon.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
