<?php

namespace App\Document\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Document\Interface\DocumentStatusRepositoryInterface;
use App\Document\Models\DocumentStatus;

class DocumentStatusRepository extends BaseRepository implements DocumentStatusRepositoryInterface
{
    protected string $_model = DocumentStatus::class;

}