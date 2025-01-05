<?php

declare(strict_types=1);

namespace App\Customers\Providers;

use App\Customers\Interface\CustomerRepositoryInterface;
use App\Customers\Interface\CustomerUserRepositoryInterface;
use App\Customers\Repositories\CustomerRepository;
use App\Customers\Repositories\CustomerUserRepository;
use Illuminate\Support\ServiceProvider;

class CustomersServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(CustomerUserRepositoryInterface::class, CustomerUserRepository::class);
    }
}