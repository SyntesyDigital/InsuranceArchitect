<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class TotalBox extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-chart-bar';
    public $name = 'TOTAL_BOX';
    public $component = 'CommonWidget';

    public $fields = [
        'name' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
        'url' => 'Modules\Architect\Fields\Types\Url',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
      'htmlId',
      'htmlClass',
      'tableElements',
      'conditionalVisibility',
      'wsVisibility',
    ];
}
