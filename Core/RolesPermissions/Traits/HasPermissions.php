<?php 

namespace Modules\Architect\Core\RolesPermissions\Traits;

use Modules\Architect\Core\RolesPermissions\Entities\Role;
use Modules\Architect\Core\RolesPermissions\Entities\Permission;

use Modules\Architect\Core\RolesPermissions\Exceptions\PermissionDoesNotExist;
use Modules\Architect\Core\RolesPermissions\Exceptions\PermissionIsBadObject;

trait HasPermissions
{
    /**
     * permissions
     *
     * @return void
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions', 'user_id', 'permission_id')->withPivot('enabled');
    }

    /**
     * Check if user has permission
     * Disabled/Enabled permission are prioritary
     *
     * @param  mixed $identifier
     *
     * @return void
     */
    public function hasPermission($identifier)
    {
        $permission = $this->getPermissionByIdentifier($identifier);

        if($this->isDisabledPermission($permission->identifier)) {
            return false;
        }

        if($this->isEnabledPermission($permission->identifier)) {
            return true;
        }

        return $this->roles->filter(function ($role) use ($permission) {
            return $role->hasPermission($permission->identifier);
        })->isNotEmpty();
    }

    /**
     * Return if this permission is disabled
     *
     * @param  mixed $identifier
     *
     * @return void
     */
    public function isDisabledPermission($identifier)
    {
        return $this->permissions
            ->where('identifier', $identifier)
            ->where('pivot.enabled', 0)
            ->isNotEmpty();
    }

    /**
     * Return if this permission is enabled
     *
     * @param  mixed $identifier
     *
     * @return void
     */
    public function isEnabledPermission($identifier)
    {
        return $this->permissions
            ->where('identifier', $identifier)
            ->where('pivot.enabled', 1)
            ->isNotEmpty();
    }

    /**
     * Save Enabled/Disabled permission 
     *
     * @param  mixed $permission
     * @param  mixed $enabled
     *
     * @return void
     */
    public function savePermission($permission, $enabled = 1)
    {
        $permission = $this->getPermissionByIdentifier($permission);

        $this->permissions()->attach([
            $permission->id => [
                'enabled' => $enabled
            ]
        ]);

        $this->load('permissions');
    }

    /**
     * Force enable permission to user
     *
     * @param mixed(Permission or String) $permission
     *
     * @voir
     */
    public function enablePermission($permission)
    {
        $this->savePermission($permission, 1);
    }


    /**
     * Force disable permission to user
     *
     * @param mixed(Permission or String) $permission
     *
     * @void
     */
    public function disablePermission($permission)
    {
        $this->savePermission($permission, 0);
    }

    /**
     * Delete permission relationship
     *
     * @param mixed(Permission or String) $permission
     *
     * @void
     */
    public function deletePermission($identifier)
    {
        $this->permissions()->detach([$permission->id]);
    }

    /**
     * Retrive permission by his identifier
     *
     * @param string $role
     *
     * @return Role
     */
    private function getPermissionByIdentifier($permission)
    {
        if(!is_object($permission)) {
            $permission = Permission::where('identifier', $permission)->first();

            if(!$permission) {
                throw new PermissionDoesNotExist;
            }
        }

        if(!is_a($permission, Permission::class)) {
            throw new PermissionIsBadObject;
        }

        return $permission;
    }
}