<?php

namespace App\Customer\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Customer\Interface\CustomerUserRepositoryInterface;
use App\Customer\Models\CustomerUser;

class CustomerUserRepository extends BaseRepository implements CustomerUserRepositoryInterface
{
    protected string $_model = CustomerUser::class;

}