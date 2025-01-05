<?php

declare(strict_types=1);

namespace App\Customer\Providers;

use App\Customer\Interface\CustomerUserRepositoryInterface;
use App\Customer\Interface\CustomerRepositoryInterface;
use App\Customer\Repositories\CustomerRepository;
use App\Customer\Repositories\CustomerUserRepository;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(CustomerUserRepositoryInterface::class, CustomerUserRepository::class);
    }
}