<?php

namespace App\States\Providers;

use App\Base\Interface\BaseRepositoryInterface;
use App\Base\Repositories\BaseRepository;
use Carbon\Laravel\ServiceProvider;

class StatesServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
    }
}