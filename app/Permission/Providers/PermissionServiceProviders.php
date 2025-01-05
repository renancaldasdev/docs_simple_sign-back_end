<?php

namespace App\Permission\Providers;

use App\Permission\Interface\PermissionRepositoryInterface;
use App\Permission\Repository\PermissionRepository;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PermissionRepositoryInterface::class, PermissionRepository::class);
    }
}