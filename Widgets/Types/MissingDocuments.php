<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class MissingDocuments extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-chart-bar';
    public $name = 'MISSING_DOCUMENTS';
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
        'tableElements',
        'conditionalVisibility',
        'itemsPerPage',
        'wsVisibility'
    ];
}
