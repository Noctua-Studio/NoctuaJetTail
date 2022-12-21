<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creación de roles
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'General']);

        //Creación de permisos y vinculación con roles
        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.delete'])->syncRoles([$role1]);

        
    }
}
