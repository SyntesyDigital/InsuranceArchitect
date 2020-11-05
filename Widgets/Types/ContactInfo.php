<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ContactInfo extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-chart-bar';
    public $name = 'CONTACT_INFO';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'telephone' => 'Modules\Architect\Fields\Types\Text',
        'email' => 'Modules\Architect\Fields\Types\Text',
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
      'wsVisibility',
    ];
}
