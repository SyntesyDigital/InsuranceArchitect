<?php

namespace Modules\Architect\Core\RolesPermissions\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'identifier',
        'group_id',
    ];

    public function roles()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions', 'id', 'permission_id');
    }

    public function group()
    {
        return $this->belongTo(PermissionGroup::class, 'group_id', 'id');
    }
}
