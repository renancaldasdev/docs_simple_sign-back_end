<?php

namespace App\RolePermission\Providers;


use App\Permission\Repository\PermissionRepository;
use App\RolePermission\Interface\RolePermissionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RolePermissionServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(RolePermissionRepositoryInterface::class, PermissionRepository::class);
    }
}