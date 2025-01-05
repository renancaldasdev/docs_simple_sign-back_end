<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Permissions\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['label' => 'Criar Documento', 'code' => 'create_document'],
            ['label' => 'Assinar Documento', 'code' => 'sign_document'],
            ['label' => 'Visualizar Documento', 'code' => 'view_document'],
            ['label' => 'Gerenciar Usuários', 'code' => 'manage_users'],
            ['label' => 'Gerenciar Clientes', 'code' => 'manage_clients'],
            ['label' => 'Aprovar Assinaturas', 'code' => 'approve_signatures'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
