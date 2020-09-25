<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ActionButton extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-external-link-square-alt';
    public $name = 'ACTION_BUTTON';
    public $component = 'CommonWidget';

    public $fields = [
        'url' => 'Modules\Architect\Fields\Types\Url',
        'title' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
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
        'wsVisibility',
        'fileElements',
    ];
}
