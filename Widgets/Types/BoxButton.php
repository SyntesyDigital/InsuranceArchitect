<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class BoxButton extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-external-link-square-alt';
    public $name = 'BOX_BUTTON';
    public $component = 'CommonWidget';

    public $fields = [
        'url' => 'Modules\Architect\Fields\Types\Url',
        'title' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Text',
        'image' => 'Modules\Architect\Fields\Types\Image',
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
        'buttonClass',
        'cropsAllowed',
        'backgroundColor',
        'backgroundHoverColor',
        'wsVisibility'
    ];
}
