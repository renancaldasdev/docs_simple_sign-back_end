<?php

namespace App\RolePermissions\Providers;


use App\Permissions\Repository\PermissionsRepository;
use App\RolePermissions\Interface\RolePermissionsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RolePermissionsServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(RolePermissionsRepositoryInterface::class, PermissionsRepository::class);
    }
}