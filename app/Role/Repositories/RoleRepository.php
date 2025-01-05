<?php

declare(strict_types=1);

namespace App\Role\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Role\Interface\RoleRepositoryInterface;
use App\Role\Models\Role;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    protected string $_model = Role::class;

    public function getRole(string $name): Role
    {
        return $this->_model::where('name', $name)->first();
    }
}