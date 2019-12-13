<?php 

namespace Modules\Architect\Core\RolesPermissions\Exceptions;

use InvalidArgumentException;

use Modules\Architect\Core\RolesPermissions\Entities\Role;

class RoleIsBadObject extends InvalidArgumentException
{
    public static function create()
    {
        return new static("Parameter role must be a " . Role::class . ' object');
    }
}