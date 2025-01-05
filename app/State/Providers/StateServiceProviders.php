<?php

namespace App\State\Providers;

use App\State\Interface\StateRepositoryInterface;
use App\State\Repositories\StateRepository;
use Illuminate\Support\ServiceProvider;

class StateServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(StateRepositoryInterface::class, StateRepository::class);
    }
}