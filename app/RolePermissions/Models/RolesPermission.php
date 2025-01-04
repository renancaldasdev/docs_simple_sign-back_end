<?php

namespace App\RolePermissions\Models;

use App\Permissions\Models\Permission;
use App\Roles\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolesPermission extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var list<string> $fillable
     */
    protected $fillable = [
        'role_id',
        'permission_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;


    /**
     * Get the role associated with this role_permission.
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the permission associated with this role_permission.
     */
    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
