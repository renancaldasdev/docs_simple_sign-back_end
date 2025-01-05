<?php

namespace App\Roles\Providers;

use App\Roles\Interface\RolesRepositoryInterface;
use App\Roles\Repositories\RolesRepository;
use Illuminate\Support\ServiceProvider;

class RolesServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(RolesRepositoryInterface::class, RolesRepository::class);
    }
}