<?php

namespace App\Signatures\Providers;

use App\Documents\Interface\DocumentsRepositoryInterface;
use App\Documents\Repositories\DocumentsRepository;
use Illuminate\Support\ServiceProvider;

class SignaturesProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(DocumentsRepositoryInterface::class, DocumentsRepository::class);
    }
}