<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class ImageTextLinkList extends Widget implements WidgetInterface
{
    public $type = 'widget-list';
    public $icon = 'fa-th-list';
    public $name = 'IMAGE_TEXT_LINK_LIST';
    public $widget = 'IMAGE_TEXT_LINK';

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
