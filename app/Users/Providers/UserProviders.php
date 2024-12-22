<?php

namespace App\Users\Providers;

use App\Users\Interface\UsersRepositoryInterface;
use App\Users\Repositories\UsersRepository;
use Carbon\Laravel\ServiceProvider;

class UserProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
    }
}