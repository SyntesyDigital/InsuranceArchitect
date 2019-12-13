<?php 

namespace Modules\Architect\Core\RolesPermissions\Exceptions;

use InvalidArgumentException;

class RoleDoesNotExist extends InvalidArgumentException
{
    public static function create(string $name)
    {
        return new static("Role `{$name}` does not exist.");
    }
}