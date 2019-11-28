<?php 

namespace Modules\Architect\Entities\Errors;

use Modules\Architect\Core\EntityError\EntityError;
use Modules\Architect\Core\EntityError\EntityErrorInterface;

class ContentError extends EntityError implements EntityErrorInterface 
{
    const ERROR_MESSAGE = 'entity error';
    const ERROR_TYPE = 'CONTENT_ERROR';

    public function getMessage()
    {
        return $this->entity->getField('title');
    }
}

