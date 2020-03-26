<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

use Modules\Architect\Entities\Content;
use Modules\Architect\Entities\ContentField;
use Modules\Architect\Entities\Language;

class ElementFormPreload extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa fa-list-alt';
    public $name = 'ELEMENT_FORM_PRELOAD';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'redirect' => 'Modules\Architect\Fields\Types\Url'
    ];

    public $rules = [];

    public $hidden = false;

    public $settings = [
        'formElementsV2Preload',
        'formElementsV2',
        'collapsable',
        'collapsed',
        'conditionalVisibility'
    ];
}
?>
