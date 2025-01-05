<?php

declare(strict_types=1);

namespace App\Signature\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Document\Interface\DocumentRepositoryInterface;
use App\Signature\Models\Signature;

class SignatureRepository extends BaseRepository implements DocumentRepositoryInterface
{
    protected string $_model = Signature::class;

}