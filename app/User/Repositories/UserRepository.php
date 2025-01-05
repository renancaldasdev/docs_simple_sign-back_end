<?php

namespace App\User\Repositories;

use App\Base\Repositories\BaseRepository;
use App\User\Interface\UserRepositoryInterface;
use App\User\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected string $_model = User::class;

}