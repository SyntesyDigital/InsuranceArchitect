<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ElementStagedForm extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa fa-list-alt';
    public $name = 'ELEMENT_STAGED_FORM';
    public $component = 'CommonWidget';

    public $fields = [
        //'title' => 'Modules\Architect\Fields\Types\Text',
        'redirect' => 'Modules\Architect\Fields\Types\Url',
        //'icon' => 'Modules\Architect\Fields\Types\Icon',
    ];

    public $rules = [
        'required',
    ];

    public $hidden = false;

    public $settings = [
        'formElementsV2',
        'collapsable',
        'collapsed',
        'conditionalVisibility',
        'template',
        'wsVisibility',
        'stageParameter',
        'initStage'
    ];
}
