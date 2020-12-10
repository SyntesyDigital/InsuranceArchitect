<?php

namespace Modules\Architect\Fields\Types;

use Modules\Architect\Fields\Field;
use Modules\Architect\Fields\FieldInterface;

class Text extends Field implements FieldInterface
{
    public $type = 'text';
    public $icon = 'fa-font';
    public $name = 'TEXT';

    public $rules = [
        'required',
        'unique',
        'maxCharacters',
        'minCharacters',
    ];

    public $settings = [
        'entryTitle',
        'htmlId',
        'htmlClass',
        'textAlign',
        'conditionalVisibility'
    ];
}
