<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{


    // Show all uploaded images
    public function index()
    {
        return view('admin.gallery_management.gallery.index'); // Adjust path as needed
    }

    // Fetch images for data or AJAX
    // public function getGallery()
    // {
    //     $images = GalleryImage::with('category')->latest()->get();
    //     $data = GalleryImage::with('category')->get();
    //     return response()->json(['data' => $images, $data]);
    // }

    public function getGallery()
    {
        $images = GalleryImage::with('category')
            ->select('gallery_category_id', DB::raw('MIN(id) as id')) // fix column to match
            ->groupBy('gallery_category_id')
            ->get()
            ->map(function ($item) {
                return GalleryImage::with('category')->find($item->id);
            });

        return response()->json([
            'data' => $images
        ]);
    }
    // Show form to upload image
    public function createImage()
    {
        $categories = GalleryCategory::all();
        return view('admin.gallery_management.gallery.create', compact('categories'));
    }

    // Store uploaded image
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:gallery_categories,id',
            'description' => 'nullable|string|max:1000',
            'multiple_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $image) {
                $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/gallery'), $fileName);

                GalleryImage::create([
                    'gallery_category_id' => $request->category_id,
                    'name' => $request->name,
                    'image' => 'uploads/gallery/' . $fileName,
                    'description' => $request->description,
                    'status' => 1,
                ]);
            }
        }

        return redirect()->route('gallery.image.index')->with('success', 'Images uploaded successfully!');
    }

    public function editGallery($categoryId)
    {
        // Get the category
        $category = GalleryCategory::findOrFail($categoryId);

        $imagesInCategory = GalleryImage::where('gallery_category_id', $categoryId)
            ->with('category')
            ->get();

        // Get the first image to show in the form
        $image = $imagesInCategory->first();

        // Get all categories for dropdown
        $allCategories = GalleryCategory::all();

        return view('admin.gallery_management.gallery.edit', compact(
            'imagesInCategory',
            'category',
            'image',
            'allCategories'
        ));
    }

    // Update image
    public function updateGallery(Request $request, $id)
    {
        $request->validate([
            'gallery_category_id' => 'required|exists:gallery_categories,id',
            'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update existing category for the first image (optional logic)
        $galleryImage = GalleryImage::findOrFail($id);
        $galleryImage->gallery_category_id = $request->gallery_category_id;
        $galleryImage->save();

        // Upload new images if any
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $image) {
                $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/gallery'), $fileName);

                GalleryImage::create([
                    'gallery_category_id' => $request->gallery_category_id,
                    'name' => $galleryImage->name, // You can customize this
                    'image' => 'uploads/gallery/' . $fileName,
                    'description' => $galleryImage->description,
                    'status' => 1,
                ]);
            }
        }

        return redirect()->route('gallery.image.index')->with('success', 'Images updated successfully!');
    }

    public function delete_Gallery($id)
    {
        $image = GalleryImage::findOrFail($id);

        // Get the category ID
        $categoryId = $image->gallery_category_id;

        // Get all images under this category
        $images = GalleryImage::where('gallery_category_id', $categoryId)->get();

        foreach ($images as $img) {
            // Delete the file
            $filePath = public_path($img->image);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Delete the DB record
            $img->delete();
        }

        return response()->json(['success' => 'All images in this category deleted successfully!']);
    }
    // Delete image
    public function destroy_Gallery($id)
    {
        $gallery = GalleryImage::findOrFail($id);

        if ($gallery->image && File::exists(public_path($gallery->image))) {
            File::delete(public_path($gallery->image));
        }

        $gallery->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
    }
}
