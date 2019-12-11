<?php 

namespace Modules\Architect\Core\EntityError;

use ReflectionClass;

class EntityErrorHandler 
{
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    public function has($error)
    {}

    public function get($class)
    {
        $model = $this->entity->errors->filter(function ($obj, $key) use ($class) {
            return $obj->error == $class;
        })->first();

        return $model 
            ? (new ReflectionClass($model->error))->newInstanceArgs([$this->entity]) 
            : null;
    }

    public function getAll()
    {
        return $this->entity->errors->map(function ($error) {
            return (new ReflectionClass($error->error))->newInstanceArgs([$this->entity]);
        });
    }

    public function remove($error)
    {
        return $this->entity->errors()
            ->where('error', is_object($error) ? get_class($error) : $error)
            ->delete();
    }

    public function add($error)
    {
        $this->remove($error);
        
        return $this->entity->errors()->create([
            'error' => is_object($error) ? get_class($error) : $error,
            'errorable_id' => $this->entity->id,
            'errorable_type' => get_class($this->entity)
        ]);
    }
}