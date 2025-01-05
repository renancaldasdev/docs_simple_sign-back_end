<?php

namespace App\Customer\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Customer\Interface\CustomerRepositoryInterface;
use App\Customer\Models\Customer;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    protected string $_model = Customer::class;

}