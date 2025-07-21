<?php

namespace App\Http\Controllers\Admin\ProductManagement;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.product_management.category.index');
    }
    public function getCategory()
    {
        return response()->json(['data' => Category::all()]);
    }
    public function create()
    {
        return view('admin.product_management.category.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category Created Successfully');
    }
    public function edit($id)
    {

        $category = Category::find($id);

        return view('admin.product_management.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);
        $category = Category::findorfail($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated Successfully');
    }
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        $category->delete();
        return response()->json(['success' => 'Category deleted successfully!']);
    }
}
