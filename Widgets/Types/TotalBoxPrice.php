<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class TotalBoxPrice extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-chart-bar';
    public $name = 'TOTAL_BOX_PRICE';
    public $component = 'CommonWidget';

    public $fields = [
        'name' => 'Modules\Architect\Fields\Types\Text',
        'subtitle' => 'Modules\Architect\Fields\Types\Text',
        'subtitle2' => 'Modules\Architect\Fields\Types\Text',
        'url' => 'Modules\Architect\Fields\Types\Url',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
      'htmlId',
      'htmlClass',
      'fileElements',
      'backgroundColor',
      'backgroundHoverColor',
      'conditionalVisibility',
    ];
}
