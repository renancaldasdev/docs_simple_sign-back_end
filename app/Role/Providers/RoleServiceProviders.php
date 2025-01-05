<?php

namespace App\Role\Providers;

use App\Role\Interface\RoleRepositoryInterface;
use App\Role\Repositories\RoleRepository;
use Illuminate\Support\ServiceProvider;

class RoleServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
    }
}