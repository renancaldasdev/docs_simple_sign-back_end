<?php

namespace Database\Seeders;

use App\Permissions\Models\Permission;
use App\Roles\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where('name', 'admin')->first();
        $customer = Role::where('name', 'customer')->first();
        $customerSignature = Role::where('name', 'customer_signature')->first();

        $permissions = Permission::all();

        $admin->permissions()->attach($permissions);

        $customer->permissions()->attach([
            Permission::where('code', 'view_document')->first()->id,
            Permission::where('code', 'sign_document')->first()->id,
        ]);

        $customerSignature->permissions()->attach([
            Permission::where('code', 'create_document')->first()->id,
            Permission::where('code', 'manage_clients')->first()->id,
            Permission::where('code', 'view_document')->first()->id,
            Permission::where('code', 'approve_signatures')->first()->id,
        ]);
    }
}
