<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class BannerCarousel extends Widget implements WidgetInterface
{
    public $type = 'widget-list';
    public $icon = 'fa-th-list';
    public $name = 'BANNER_CAROUSEL';
    public $widget = 'BANNER_SLIDE';

    public $rules = [
        'required',
    ];

    public $hidden = true;

    public $settings = [
        'htmlId',
        'htmlClass',
        'cropsAllowed',
        'wsVisibility',
        'conditionalVisibility',
    ];
}
