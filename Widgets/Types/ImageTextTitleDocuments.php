<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ImageTextTitleDocuments extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa-file-o';
    public $name = 'IMAGE_TEXT_TITLE_DOCUMENTS';
    public $component = 'CommonWidget';

    public $fields = [
        'image' => 'Modules\Architect\Fields\Types\Image',
        'title' => 'Modules\Architect\Fields\Types\Text',
        'titleDoc' => 'Modules\Architect\Fields\Types\Text',
        'urlDoc' => 'Modules\Architect\Fields\Types\Link',
        'link2' => 'Modules\Architect\Fields\Types\Link',
        'richtext' => 'Modules\Architect\Fields\Types\RichText',
        'file' => 'Modules\Architect\Fields\Types\File',
    ];

    public $rules = [
        'required',
    ];

    public $settings = [
        'htmlId',
        'htmlClass',
        'cropsAllowed',
        'conditionalVisibility',
    ];
}
