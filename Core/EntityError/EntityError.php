<?php 

namespace Modules\Architect\Core\EntityError;

abstract class EntityError
{
    const ERROR_MESSAGE = 'entity error';
    const ERROR_TYPE = 'ENTITY_ERROR';

    public $entity;

    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    public function getMessage()
    {
        return self::ERROR_MESSAGE;
    }

    public function getType()
    {
        return self::ERROR_TYPE;
    }

    public function getEntity()
    {
        return $this->entity;
    }
}