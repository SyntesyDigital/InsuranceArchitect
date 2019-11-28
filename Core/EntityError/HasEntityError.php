<?php 

namespace Modules\Architect\Core\EntityError;

use Modules\Architect\Core\EntityError\EntityErrorHandler;

trait HasEntityError
{
    public function errors()
    {
        return $this->morphMany('Modules\Architect\Entities\Error', 'errorable');
    }

    public function hasError($error)
    {
        return (new EntityErrorHandler($this))->has($error);
    }

    public function getError($error)
    {
        return (new EntityErrorHandler($this))->get($error);
    }

    public function getErrors()
    {
        return (new EntityErrorHandler($this))->getAll();
    }

    public function saveError($error)
    {
        return (new EntityErrorHandler($this))->add($error);
    }

    public function getErrorMessage($type)
    {
        return $this->getError($type)->getMessage();
    }
}
