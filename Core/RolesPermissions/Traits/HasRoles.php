<?php 

namespace Modules\Architect\Core\RolesPermissions\Traits;

use Modules\Architect\Core\RolesPermissions\Entities\Role;
use Modules\Architect\Core\RolesPermissions\Entities\Permission;
use Modules\Architect\Core\RolesPermissions\Exceptions\RoleDoesNotExist;

trait HasRoles
{

    /**
     * roles relation
     *
     * @return relationship
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    /**
     * Check if has a role
     *
     * @param string $role 
     *
     * @return boolean
     */
    public function hasRole($role)
    {
        return $this->roles->where('identifier', is_object($role) ? $role->identifier : $role)->isNotEmpty();
    }

    /**
     * Check if has various roles
     *
     * @param string $roles
     *
     * @return boolean
     */
    public function hasRoles(Array $roles)
    {
        return $this->roles->whereIn('identifier', $roles)->count() == sizeof($roles) ? true : false;
    }


    /**
     * Add role to user
     *
     * @param string $role
     *
     * @return boolean
     */
    public function addRole($role)
    {        
        $this->roles()->attach([
            $this->getRoleByIdentifier($role)->id
        ]);
    }

    /**
     * Remove role 
     *
     * @param string $role
     *
     * @return boolean
     */
    public function removeRole($role)
    {
        $this->roles()->detach([
            $this->getRoleByIdentifier($role)->id
        ]);

    }


    /**
     * Retrive role by his identifier
     *
     * @param string $role
     *
     * @return Role
     */
    private function getRoleByIdentifier($role)
    {
        if(!is_object($role)) {
            $role = Role::where('identifier', $role)->first();

            if(!$role) {
                throw new RoleDoesNotExist;
            }
        }

        if(!is_a($role, Role::class)) {
            throw new RoleIsBadObject;
        }

        return $role;
    }

}