<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class MessageBox extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'far fa-bell';
    public $name = 'MESSAGE_BOX';
    public $component = 'CommonWidget';

    public $fields = [];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
      'htmlId',
      'htmlClass',
      'fileElements',
      'conditionalVisibility',
    ];
}
