<?php

namespace App\RolePermission\Repository;

use App\Base\Repositories\BaseRepository;
use App\RolePermission\Interface\RolePermissionRepositoryInterface;
use App\RolePermission\Models\RolePermission;

class RolePermissionRepository extends BaseRepository implements RolePermissionRepositoryInterface
{
    protected string $_model = RolePermission::class;

}