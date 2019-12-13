<?php 

namespace Modules\Architect\Core\RolesPermissions\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Architect\Core\RolesPermissions\Entities\Permission;
use Modules\Architect\Core\RolesPermissions\Traits\RolePermissions;

class Role extends Model 
{
    use RolePermissions;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

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

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    

}