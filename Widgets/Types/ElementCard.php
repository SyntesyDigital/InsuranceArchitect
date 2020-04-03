<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

use Modules\Architect\Entities\Content;
use Modules\Architect\Entities\ContentField;
use Modules\Architect\Entities\Language;

class ElementCard extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-columns';
    public $name = 'ELEMENT_CARD';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'link' => 'Modules\Architect\Fields\Types\Link'
    ];

    public $rules = [
        'required'
    ];

    public $hidden = false;

    public $settings = [
        'fileElements',
        'template',
        'collapsable',
        'collapsed',
        'conditionalVisibility'
    ];
}
?>
