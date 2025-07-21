<?php

namespace App\Http\Controllers\Admin\ProductManagement;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Image;
use App\Models\ProductFeature;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product_management.product.index');
    }
    public function getProduct()
    {
        $products = Product::with(['category:id,name', 'createdBy:id,name'])->get();
        return response()->json(['data' => $products]);
    }

    public function create()
    {
        $users = User::all(); // Fetch all users (admins & other users)
        $categories = Category::all();
        return view('admin.product_management.product.create', compact('categories', 'users'));
    }
    // public function store(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'slug' => 'nullable|string|max:255|unique:products,slug',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric|min:0',
    //         'discount_price' => 'nullable|numeric|min:0|lt:price', // Discount price should be less than price
    //         'stock' => 'required|integer|min:0',
    //         'category_id' => 'required|exists:categories,id',
    //         'brand' => 'nullable|string|max:255',
    //         'rating' => 'required|numeric|min:0|max:5',
    //         'status' => 'boolean',
    //         'featured' => 'boolean',
    //         'is_trending' => 'boolean',
    //         'is_new' => 'boolean',
    //         'sku' => 'nullable|string|unique:products,sku|max:255',
    //         'created_by' => 'nullable|exists:users,id',
    //         'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Max size: 2MB
    //         'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Each image max 2MB
    //     ]);

    //     $product = new Product();
    //     $product->name = $request->name;
    //     $product->slug = $request->slug;
    //     $product->description = $request->description;
    //     $product->price = $request->price;
    //     $product->discount_price = $request->discount_price;
    //     $product->stock = $request->stock;
    //     $product->category_id = $request->category_id;
    //     $product->brand = $request->brand;
    //     $product->rating = $request->rating ?? 0;
    //     $product->status = $request->status ?? 1;
    //     $product->featured = $request->featured ?? 0;
    //     $product->is_trending = $request->is_trending ?? 0;
    //     $product->is_new = $request->is_new ?? 0;
    //     $product->sku = $request->sku;
    //     $product->created_by = $request->created_by ?? null;

    //     // Store the main product image
    //     if ($request->hasFile('thumbnail')) {
    //         $file = $request->file('thumbnail');
    //         $fileName = time() . '.' . $file->getClientOriginalExtension(); // Generate time-based name
    //         $thumbnailPath = $file->storeAs('images/products', $fileName, 'public');
    //         $product->thumbnail = $thumbnailPath;
    //     }
    //     // Save product
    //     $product->save();

    //     // Store gallery images
    //     if ($request->hasFile('multiple_images')) {
    //         foreach ($request->file('multiple_images') as $key => $file) {

    //             // Append an index to the time() to avoid duplicate names
    //             $product_file_name = time() . '_' . $key . '_' . $file->getClientOriginalName();
    //             $product_sub_images = $file->storeAs('images/product_gallery', $product_file_name, 'public');

    //             // Save the image path in the database
    //             Product_Image::create([
    //                 'product_id' => $product->id,
    //                 'image_path' => $product_sub_images,
    //             ]);
    //         }
    //     }

    //     // Redirect with success message
    //     return redirect()->route('product.index')->with('success', 'Product and gallery images created successfully!');
    // }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            // 'slug' => 'required|string|max:255|unique:products,slug',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lt:price', // Discount price should be less than price
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand' => 'nullable|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'status' => 'boolean',
            'featured' => 'boolean',
            'is_trending' => 'boolean',
            'is_new' => 'boolean',
            'sku' => 'nullable|string|unique:products,sku|max:255',
            // 'created_by' => 'required|exists:users,id',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Max size: 2MB
            'multiple_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Each image max 2MB
            'addmore.*.addingfeatures' => 'nullable',
            'addmore.*.addingfeaturesvalue' => 'nullable',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name); // ✅ Generates a clean slug
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->rating = $request->rating ?? 0;
        $product->status = $request->status ?? 1;
        $product->featured = $request->featured ?? 0;
        $product->is_trending = $request->is_trending ?? 0;
        $product->is_new = $request->is_new ?? 0;
        $product->sku = $request->sku;
        $product->created_by = Auth::id();

        // Store the main product image
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); // Generate time-based name
            $thumbnailPath = $file->storeAs('images/products', $fileName, 'public');
            $product->thumbnail = $thumbnailPath;
        }

        // Save product
        $product->save();

        // Store gallery images
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $key => $file) {

                // Append an index to the time() to avoid duplicate names
                $product_file_name = time() . '_' . $key . '_' . $file->getClientOriginalName();
                $product_sub_images = $file->storeAs('images/product_gallery', $product_file_name, 'public');

                // Save the image path in the database
                Product_Image::create([
                    'product_id' => $product->id,
                    'image_path' => $product_sub_images,
                ]);
            }
        }


        if ($request->has('addmore')) {
            foreach ($request['addmore'] as $key => $value) {
                // Check if both fields have data before inserting
                if (!empty($value['addingfeatures']) && !empty($value['addingfeaturesvalue'])) {
                    ProductFeature::create([
                        'product_id' => $product->id,
                        'feature' => $value['addingfeatures'],
                        'value' => $value['addingfeaturesvalue'],
                    ]);
                }
            }
        }




        // Redirect with success message
        return redirect()->route('product.index')->with('success', 'Product details created successfully!');
    }
    public function edit($id)
    {
        $users = User::all();
        $categories = Category::all();
        $Product_image = Product::findOrFail($id);


        $edata = $Product_image;
        $productfeature = $Product_image->feature;

        // dd($productfeature);

        // Fetch related gallery images using `Product_image_id`
        $Product_related_image = Product_Image::where('product_id', $id)->get();
        return view('admin.product_management.product.edit', compact('Product_image', 'categories', 'Product_related_image', 'users', 'productfeature'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            // 'slug' => 'required|string|max:255|unique:products,slug,' . $id,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lt:price',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand' => 'nullable|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'status' => 'boolean',
            'featured' => 'boolean',
            'is_trending' => 'boolean',
            'is_new' => 'boolean',
            'sku' => 'nullable|string|unique:products,sku,' . $id,
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'addmore.*.addingfeatures' => 'nullable|string',
            'addmore.*.addingfeaturesvalue' => 'nullable|string',
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Update product fields
        $product->update([
            'name' => $request->input('name'),
            'slug' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'discount_price' => $request->input('discount_price'),
            'stock' => $request->input('stock'),
            'category_id' => $request->input('category_id'),
            'brand' => $request->input('brand'),
            'rating' => $request->input('rating') ?? 0,
            'status' => $request->input('status') ?? 1,
            'featured' => $request->input('featured') ?? 0,
            'is_trending' => $request->input('is_trending') ?? 0,
            'is_new' => $request->input('is_new') ?? 0,
            'sku' => $request->input('sku'),
            'created_by' => Auth::id(),
        ]);

        // Update the main product image if a new one is uploaded
        if ($request->hasFile('thumbnail')) {
            if ($product->thumbnail && Storage::exists('public/' . $product->thumbnail)) {
                Storage::delete('public/' . $product->thumbnail);
            }
            $file = $request->file('thumbnail');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $thumbnailPath = $file->storeAs('images/products', $fileName, 'public');
            $product->update(['thumbnail' => $thumbnailPath]);
        }

        // Store new gallery images
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $key => $file) {
                $product_file_name = time() . '_' . $key . '_' . $file->getClientOriginalName();
                $product_sub_images = $file->storeAs('images/product_gallery', $product_file_name, 'public');
                Product_Image::create([
                    'product_id' => $product->id,
                    'image_path' => $product_sub_images,
                ]);
            }
        }

        // Update product features
        $existingFeatures = ProductFeature::where('product_id', $product->id)->get();
        $existingFeatureIds = $existingFeatures->pluck('id')->toArray();

        $newFeatureIds = [];

        if ($request->has('addmore')) {
            foreach ($request->addmore as $key => $value) {
                if (!empty($value['addingfeatures']) && !empty($value['addingfeaturesvalue'])) {
                    // Check if feature already exists, update if yes, else insert new
                    if (isset($existingFeatures[$key])) {
                        $existingFeatures[$key]->update([
                            'feature' => $value['addingfeatures'],
                            'value' => $value['addingfeaturesvalue'],
                        ]);
                        $newFeatureIds[] = $existingFeatures[$key]->id;
                    } else {
                        $newFeature = ProductFeature::create([
                            'product_id' => $product->id,
                            'feature' => $value['addingfeatures'],
                            'value' => $value['addingfeaturesvalue'],
                        ]);
                        $newFeatureIds[] = $newFeature->id;
                    }
                }
            }
        }

        // Delete features that are no longer in the updated request
        $featuresToDelete = array_diff($existingFeatureIds, $newFeatureIds);
        ProductFeature::whereIn('id', $featuresToDelete)->delete();

        // Redirect with success message
        return redirect()->route('product.index')->with('success', 'Product details updated successfully!');
    }


    public function destroy($id, Request $request)
    {
        $product = Product::findOrFail($id);

        // Delete the main thumbnail image
        $filePath = 'images/products/' . $product->thumbnail;
        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
            Log::info("Deleted file: " . $filePath);
        } else {
            Log::info("File not found: " . $filePath);
        }

        // Delete all associated gallery images
        $galleryImages = Product_Image::where('product_id', $id)->get();
        foreach ($galleryImages as $image) {
            $galleryPath = 'images/products/' . $image->image_path;
            if (Storage::exists($galleryPath)) {
                Storage::delete($galleryPath);
                Log::info("Deleted gallery file: " . $galleryPath);
            } else {
                Log::info("Gallery file not found: " . $galleryPath);
            }
            $image->delete();
        }

        // Delete the product record
        $product->delete();

        // Return response based on request type
        if ($request->ajax()) {
            return response()->json(['success' => 'Product deleted successfully!']);
        } else {
            return redirect()->route('project.index')->with('success', 'Product and images deleted successfully.');
        }
    }

    public function destroy_product_image($id)
    {
        // Find the gallery image by its ID
        $multiple_images = Product_Image::findOrFail($id);

        // Delete the image file from storage if it exists
        if (Storage::exists('product_gallery/' . $multiple_images->image)) {
            Storage::delete('product_gallery/' . $multiple_images->image);
        }

        // Delete the gallery image record from the database
        $multiple_images->delete();

        // Return a response (redirect back or return a success message)
        return redirect()->back()->with('message', 'Product image removed successfully.');
    }
}
