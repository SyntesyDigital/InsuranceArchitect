<?php 

namespace Modules\Architect\Core\EntityError;

interface EntityErrorInterface 
{
    public function __construct($entity);
    public function getMessage();
    public function getType();
}