<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ElementFormButton extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa fa-list-alt';
    public $name = 'ELEMENT_FORM_BUTTON';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text',
        'subtitle' => 'Modules\Architect\Fields\Types\Text',
        'redirect' => 'Modules\Architect\Fields\Types\Url',
        'icon' => 'Modules\Architect\Fields\Types\Icon',
    ];

    public $rules = [];

    public $hidden = false;

    public $settings = [
        'formElementsV2',
        'conditionalVisibility',
        'buttonClass',
        'wsVisibility',
        'renderButton',
        'btnClass',
    ];
}
