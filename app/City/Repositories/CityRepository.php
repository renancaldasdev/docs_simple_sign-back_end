<?php

declare(strict_types=1);

namespace App\City\Repositories;

use App\Base\Repositories\BaseRepository;
use App\City\Interface\CityRepositoryInterface;
use App\City\Models\City;

class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    protected string $_model = City::class;

}