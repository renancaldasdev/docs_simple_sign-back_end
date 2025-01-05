<?php

declare(strict_types=1);

namespace App\Document\Providers;

use App\Document\Interface\DocumentRepositoryInterface;
use App\Document\Interface\DocumentStatusRepositoryInterface;
use App\Document\Repositories\DocumentRepository;
use App\Document\Repositories\DocumentStatusRepository;
use Illuminate\Support\ServiceProvider;


class DocumentServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DocumentRepositoryInterface::class, DocumentRepository::class);
        $this->app->bind(DocumentStatusRepositoryInterface::class, DocumentStatusRepository::class);
    }
}