<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ElementTable extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-table';
    public $name = 'ELEMENT_TABLE';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'addBtn' => 'Modules\Architect\Fields\Types\Link',
        'excelBtn' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
        'pagination',
        'tableElements',
        'excel',
    ];
}
