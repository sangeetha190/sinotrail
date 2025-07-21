<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\DataTables;

class PermissionController extends Controller
{

    public function index()
    {
        return view('admin.user_management.permission.index');
    }
    public function getPermissions()
    {
        return response()->json(['data' => Permission::all()]);
    }

    public function create()
    {
        return view('admin.user_management.Permission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name', // ✅ Ensure name is unique
        ]);

        try {
            Permission::create(['name' => $request->name]);
            return redirect()->route('permission.index')->with('success', 'Permission created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('permission.index')->with('error', 'Something went wrong. Please try again.');
        }
    }
    public function edit($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return redirect()->route('permission.index')->with('error', 'Permission not found.');
        }

        return view('admin.user_management.permission.edit', compact('permission'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $permission = Permission::findOrFail($id);

        $permission->update([
            'name' => $request->name,
        ]);
        return redirect()->route('permission.index')->with('success', 'Permission updated successfully');
    }

    public function delete($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        $permission->delete();
        return response()->json(['success' => 'Permission deleted successfully!']);
    }
}
