<?php

declare(strict_types=1);

namespace App\State\Repositories;

use App\Base\Repositories\BaseRepository;
use App\State\Interface\StateRepositoryInterface;
use App\State\Models\State;

class StateRepository extends BaseRepository implements StateRepositoryInterface
{
    protected string $_model = State::class;

}