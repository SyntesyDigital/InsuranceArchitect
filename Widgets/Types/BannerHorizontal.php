<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class BannerHorizontal extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-pencil-square-o';
    public $name = 'BANNER_HORIZONTAL';
    public $component = 'CommonWidget';

    public $fields = [
        'image' => 'Modules\Architect\Fields\Types\Image',
        'title' => 'Modules\Architect\Fields\Types\Text',
        'subtitle' => 'Modules\Architect\Fields\Types\Text',
        'url' => 'Modules\Architect\Fields\Types\Url',
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
      'wsVisibility'
    ];
}
