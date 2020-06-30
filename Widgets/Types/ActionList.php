<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ActionList extends Widget implements WidgetInterface
{
    public $type = 'widget-list';
    public $icon = 'fa-th-list';
    public $name = 'ACTION_LIST';
    public $widget = 'SIMPLE_BUTTON';

    public $rules = [
        'required',
    ];

    public $settings = [
        'htmlId',
        'htmlClass',
    ];
}
