<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run(): void
    {
        $permission = [
            ['name' => 'usermanagement'],
            ['name' => 'productmanagement'],
            // ['name' => 'ordermanagment'],
            ['name' => 'contactmanagment']
        ];
        echo '-----------------------------------------' . "\n";
        echo '---------Permission Seeding--------' . "\n";
        foreach ($permission as $key => $values) {
            $permission = new Permission();
            $permission->name = $values['name'];
            $permission->save();
            echo "------Permission Name => $permission->name ---------" . "\n";
        }
        echo '---------Permission Seeding Completed--------' . "\n";
    }
}
