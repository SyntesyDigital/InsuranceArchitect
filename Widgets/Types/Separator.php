<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class Separator extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-arrows-alt-v';
    public $name = 'SEPARATOR';
    public $component = 'CommonWidget';

    public $fields = [];

    public $rules = [];

    public $hidden = true;

    public $settings = [
        'htmlId',
        'htmlClass',
        'height',
        'conditionalVisibility',
    ];
}
