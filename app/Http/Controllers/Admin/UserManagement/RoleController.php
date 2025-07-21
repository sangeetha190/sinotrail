<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        return view('admin.user_management.role.index');
    }

    public function getRoles()
    {
        $roles = Role::with('permissions')->get(); // Eager load permissions

        $data = $roles->map(function ($role) {
            return [
                'id' => $role->id,
                'name' => $role->name,
                'permissions' => $role->permissions->pluck('name')->implode(', '), // Convert to comma-separated string
            ];
        });

        return response()->json(['data' => $data]);
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('admin.user_management.role.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        if ($request->has('permission') && is_array($request->permission)) {

            $permission = Permission::whereIn('id', $request->permission)->get();

            $role->syncPermissions($permission);
        }

        return redirect()->route('role.index')
            ->with('success', 'Role created successfully');
    }
    public function edit($id)
    {
        $roles = Role::find($id);
        if (!$roles) {
            abort(404); // Or handle the case where the role is not found
        }

        $permissions = Permission::get();

        $rolePermissions = DB::table("role_has_permissions")
            ->where("role_has_permissions.role_id", $roles->id)
            ->pluck('role_has_permissions.permission_id')
            ->all();

        return view('admin.user_management.role.edit', compact('roles', 'permissions', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();

        if ($request->has('permission') && is_array($request->permission)) {
            $permissions = Permission::whereIn('id', $request->permission)->get();
            $role->syncPermissions($permissions);
        }

        return redirect()->route('role.index')
            ->with('success', 'Role updated successfully');
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        if (!$role) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        $role->delete();
        return response()->json(['success' => 'Role deleted successfully!']);
    }
}
