<?php 

namespace Modules\Architect\Entities\Errors;

use Modules\Architect\Core\EntityError\EntityErrorContract;
use Modules\Architect\Core\EntityError\EntityErrorInterface;

class EntityError extends EntityErrorContract implements EntityErrorInterface 
{
    const ERROR_MESSAGE = 'entity error';
    const ERROR_TYPE = 'ENTITY_ERROR';

    public function getMessage()
    {
        return $this->entity->getField('title');
    }
}

