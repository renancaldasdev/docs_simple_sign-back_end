<?php

namespace App\Permission\Repository;

use App\Base\Repositories\BaseRepository;
use App\Permission\Interface\PermissionRepositoryInterface;
use App\Permission\Models\Permission;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    protected string $_model = Permission::class;

}