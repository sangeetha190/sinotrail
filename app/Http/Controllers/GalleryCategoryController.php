<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{


    public function index()
    {
        $categories = GalleryCategory::with('images')->get();
        return view('admin.gallery_management.category.index', compact('categories'));
    }

    public function getImageCategory()
    {
        return response()->json(['data' => GalleryCategory::all()]);
    }

    public function createCategory()
    {
        $categories = GalleryCategory::where('status', 1)->get();
        return view('admin.gallery_management.category.create', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate(['name' => 'required|unique:gallery_categories']);
        GalleryCategory::create($request->only('name', 'status'));
        return redirect()->route('image_category.index')->with('success', 'Category created');
    }

    public function editCategory($id)
    {
        $category = GalleryCategory::find($id);
        return view('admin.gallery_management.category.edit', compact('category'));
    }
    // updateCategory
    public function updateCategory(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);
        $category = GalleryCategory::findorfail($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('image_category.index')->with('success', 'Gallery Category updated Successfully');
    }

    // destroy_Category
    public function destroy_Category($id)
    {
        $category = GalleryCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        $category->delete();
        return response()->json(['success' => 'Gallery Category deleted successfully!']);
    }
}
