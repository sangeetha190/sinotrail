<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('roles')->delete();
        echo '------------------------------------' . "\n";
        echo '--------Role Seeding-------' . "\n";
        $roles = [
            ['name' => 'Super Admin']
        ];
        foreach ($roles as $key => $value) {
            $role = new Role();
            $role->name = $value['name'];
            $role->save();
            echo "---------Roles Name => $role->name----------" . "\n";
        }

        $super_admin = Role::all();
        $permission = Permission::get();

        foreach ($permission as $key => $value) {
            $super_admin[0]->givePermissionTo($value->name);
        }
        echo "---------All Permission to => Super Admin----------" . "\n";
    }
}
