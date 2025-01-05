<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Roles\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'customer_signature'],
            ['name' => 'customer'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
