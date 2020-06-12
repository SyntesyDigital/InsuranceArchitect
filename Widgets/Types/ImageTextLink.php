<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ImageTextLink extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa-file-o';
    public $name = 'IMAGE_TEXT_LINK';
    public $component = 'CommonWidget';

    public $fields = [
        'image' => 'Modules\Architect\Fields\Types\Image',
        'link' => 'Modules\Architect\Fields\Types\Link',
        'richtext' => 'Modules\Architect\Fields\Types\RichText',
        'date' => 'Modules\Architect\Fields\Types\Date',
    ];

    public $rules = [
        'required',
    ];

    public $settings = [
        'htmlId',
        'htmlClass',
        'cropsAllowed',
    ];
}