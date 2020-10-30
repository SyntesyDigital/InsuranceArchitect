<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class TimeLine extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'far fa-comment-dots';
    public $name = 'TIMELINE';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
      'collapsable',
      'collapsed',
      'bootstrapColumns',
      'conditionalVisibility',
      'itemsPerPage',
      'tableElements',
      'wsVisibility',
    ];
}
