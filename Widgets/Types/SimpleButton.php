<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class SimpleButton extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa-external-link-square';
    public $name = 'SIMPLE_BUTTON';
    public $component = 'CommonWidget';

    public $fields = [
        'link' => 'Modules\Architect\Fields\Types\Link',
    ];

    public $rules = [
        'required',
    ];

    public $settings = [
        'htmlId',
        'htmlClass',
        'hiddenFilter',
        'conditionalVisibility',
        'btnClass',
        'alignContent'
    ];
}
