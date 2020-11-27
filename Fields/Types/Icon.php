<?php

namespace Modules\Architect\Fields\Types;

use Modules\Architect\Fields\FieldInterface;
use Modules\Architect\Fields\Field;

class Icon extends Field implements FieldInterface
{
    public $type = 'icon';
    public $icon = 'fas fa-icons';
    public $name = 'ICON';

    public $rules = [
        'required',
    ];

    public $settings = [
        'htmlId',
        'htmlClass',
        'fontSize',
        'conditionalVisibility'
    ];
}
