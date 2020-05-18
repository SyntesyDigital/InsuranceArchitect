<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class BackgroundImage extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-chart-bar';
    public $name = 'BACKGROUND_IMAGE';
    public $component = 'CommonWidget';

    public $fields = [
        'image' => 'Modules\Architect\Fields\Types\Image',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
      'htmlId',
      'htmlClass',
      'conditionalVisibility',
      'height',
    ];
}
