<?php

declare(strict_types=1);

namespace App\Cities\Providers;

use App\Cities\Interface\CitiesRepositoryInterface;
use App\Cities\Repositories\CitiesRepository;
use Illuminate\Support\ServiceProvider;

class CitiesServiceProviders extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(CitiesRepositoryInterface::class, CitiesRepository::class);
    }
}