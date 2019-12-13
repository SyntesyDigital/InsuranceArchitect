<?php 

namespace Modules\Architect\Core\RolesPermissions\Traits;

use Modules\Architect\Core\RolesPermissions\Entities\Permission;

use Modules\Architect\Core\RolesPermissions\Exceptions\PermissionDoesNotExist;
use Modules\Architect\Core\RolesPermissions\Exceptions\PermissionIsBadObject;

trait RolePermissions
{
    /**
     * Check if role has permission
     *
     * @param  mixed $identifier
     *
     * @return boolean
     */
    public function hasPermission($permission)
    {
        $permission = $this->getPermissionByIdentifier($permission);

        return $this->permissions->where('identifier', $permission->identifier)->isNotEmpty();
    }

    /**
     * Return if role a all this permissions
     *
     * @param Array $identifiers
     *
     * @return boolean
     */
    public function hasPermissions(Array $identifiers)
    {
        return $this->roles->whereIn('identifier', $identifiers)->count() == sizeof($permissions) ? true : false;
    }

    /**
     * Add permission to role
     *
     * @param  mixed $permission
     *
     * @return void
     */
    public function addPermission($permission)
    {
        $this->permissions()->attach([
            $this->getPermissionByIdentifier($permission)->id
        ]);

        $this->load('permissions');
    }

    /**
     * Remove permission to role
     *
     * @param  mixed $permission
     *
     * @return void
     */
    public function removePermission($permission)
    {
        $this->permissions()->detach([
            $this->getPermissionByIdentifier($permission)->id
        ]);

        $this->load('permissions');
    }

    /**
     * Return all permissions
     *
     * @return void
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Retrive permission by his identifier
     *
     * @param string $permission
     *
     * @return Permission
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