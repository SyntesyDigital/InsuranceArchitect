<?php

namespace Modules\Architect\Core\RolesPermissions\Entities;

use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions_groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identifier',
        'order'
    ];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
