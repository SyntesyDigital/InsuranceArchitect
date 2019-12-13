<?php 

namespace Modules\Architect\Core\RolesPermissions\Exceptions;

use InvalidArgumentException;

class PermissionDoesNotExist extends InvalidArgumentException
{
    public static function create(string $name)
    {
        return new static("Permission `{$name}` does not exist.");
    }
}