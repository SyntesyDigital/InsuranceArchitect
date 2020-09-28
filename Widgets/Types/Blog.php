<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class Blog extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa-file-o';
    public $name = 'BLOG';
    public $component = 'CommonWidget';

    public $fields = [
      //  'title' => 'Modules\Architect\Fields\Types\Text'
    ];

    public $rules = [
        'required',
    ];

    public $hidden = true;

    public $settings = [
        'htmlId',
        'htmlClass',
        'itemsPerPage',
        'conditionalVisibility',
    ];
}
