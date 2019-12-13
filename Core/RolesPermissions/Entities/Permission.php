<?php 

namespace Modules\Architect\Core\RolesPermissions\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Architect\Core\RolesPermissions\Entities\Permission;

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
        'identifier'
    ];

    public function roles()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions', 'id', 'permission_id');
    }
}