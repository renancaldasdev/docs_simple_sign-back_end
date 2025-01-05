<?php

namespace App\User\Providers;

use App\User\Interface\UserRepositoryInterface;
use App\User\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}