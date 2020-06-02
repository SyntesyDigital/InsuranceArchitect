<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ElementSecondaryTable extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-table';
    public $name = 'ELEMENT_SECONDARY_TABLE';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'moreBtn' => 'Modules\Architect\Fields\Types\Link',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
        'maxItems',
        'hideEmptyRows',
        'pagination',
        'tableElements',
        'collapsable',
        'collapsed',
        'hiddenFilter',
        'conditionalVisibility',
    ];
}
