<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class Faqs extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'far fa-question-circle';
    public $name = 'FAQS';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
        'description' => 'Modules\Architect\Fields\Types\RichText',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
        'htmlId',
        'htmlClass',
        'hiddenFilter',
        'conditionalVisibility',
    ];
}
