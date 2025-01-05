<?php

declare(strict_types=1);

namespace App\Role\Interface;

use App\Base\Interface\BaseRepositoryInterface;
use App\Role\Models\Role;

interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    public function getRole(string $name): Role;

}