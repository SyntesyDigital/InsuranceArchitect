<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ElementFile extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-columns';
    public $name = 'ELEMENT_FILE';
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
        'collapsable',
        'collapsed',
        'doubleColumn',
        'hiddenFilter',
        'conditionalVisibility',
        'wsVisibility'
    ];
}
