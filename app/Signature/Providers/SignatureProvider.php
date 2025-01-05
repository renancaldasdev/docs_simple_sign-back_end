<?php

namespace App\Signature\Providers;

use App\Document\Interface\DocumentRepositoryInterface;
use App\Document\Repositories\DocumentRepository;
use Illuminate\Support\ServiceProvider;

class SignatureProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(DocumentRepositoryInterface::class, DocumentRepository::class);
    }
}