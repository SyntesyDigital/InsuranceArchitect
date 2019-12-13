<?php 

namespace Modules\Architect\Core\RolesPermissions\Exceptions;

use InvalidArgumentException;

use Modules\Architect\Core\RolesPermissions\Entities\Permission;

class PermissionIsBadObject extends InvalidArgumentException
{
    public static function create()
    {
        return new static("Parameter permission must be a " . Permission::class . ' object');
    }
}