<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class Step extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa-external-link-square';
    public $name = 'STEP';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
    ];

    public $rules = [
        'required',
    ];

    public $settings = [
        'htmlId',
        'htmlClass',
        'conditionalVisibility',
    ];
}
