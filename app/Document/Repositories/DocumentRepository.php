<?php

namespace App\Document\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Document\Interface\DocumentRepositoryInterface;
use App\Document\Models\Document;

class DocumentRepository extends BaseRepository implements DocumentRepositoryInterface
{
    protected string $_model = Document::class;

}