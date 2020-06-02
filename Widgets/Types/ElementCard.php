<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ElementCard extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-columns';
    public $name = 'ELEMENT_CARD';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'link' => 'Modules\Architect\Fields\Types\Link',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
        'fileElements',
        'template',
        'collapsable',
        'collapsed',
        'conditionalVisibility',
    ];
}
