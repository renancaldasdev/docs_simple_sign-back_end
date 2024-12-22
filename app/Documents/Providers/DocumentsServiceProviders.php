<?php

declare(strict_types=1);

namespace App\Documents\Providers;

use App\Documents\Interface\DocumentsRepositoryInterface;
use App\Documents\Repositories\DocumentsRepository;
use Carbon\Laravel\ServiceProvider;

class DocumentsServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DocumentsRepositoryInterface::class, DocumentsRepository::class);
    }
}