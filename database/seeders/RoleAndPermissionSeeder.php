<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;



class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate(['name' => 'create-admins']);
        Permission::firstOrCreate(['name' => 'create-users']);
        Permission::firstOrCreate(['name' => 'edit-users']);
        Permission::firstOrCreate(['name' => 'delete-users']);

        $adminRole = Role::firstOrCreate(['name' => 'Administrador']);
        $teacherRole = Role::firstOrCreate(['name' => 'Editor']);
        $studentRole = Role::firstOrCreate(['name' => 'Estudiante']); 

        $adminRole->syncPermissions([
            'create-admins',
            'create-users',
            'edit-users',
            'delete-users',
        ]);

        $teacherRole->syncPermissions([
            'create-users',
            'edit-users',
            'delete-users'
        ]);
    }
}
