<?php

declare(strict_types=1);

namespace App\City\Providers;

use App\City\Interface\CityRepositoryInterface;
use App\City\Repositories\CityRepository;
use Illuminate\Support\ServiceProvider;

class CityServiceProviders extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
    }
}