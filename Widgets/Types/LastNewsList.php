<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

class LastNewsList extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-th-list';
    public $name = 'LAST_NEWS_LIST';
    public $component = 'CommonWidget';

    public $rules = [
        'required',
    ];

    public $fields = [];

    public $settings = [
        'htmlId',
        'htmlClass',
        'typology_id',
        'conditionalVisibility',
    ];
}
