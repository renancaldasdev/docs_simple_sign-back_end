<?php

namespace App\Permissions\Providers;

use App\Permissions\Interface\PermissionsRepositoryInterface;
use App\Permissions\Repository\PermissionsRepository;
use Illuminate\Support\ServiceProvider;

class PermissionsServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PermissionsRepositoryInterface::class, PermissionsRepository::class);
    }
}