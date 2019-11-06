<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

use Modules\Architect\Entities\Content;
use Modules\Architect\Entities\ContentField;
use Modules\Architect\Entities\Language;

class TotalBox extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fas fa-chart-bar';
    public $name = 'TOTAL_BOX';
    public $component = 'CommonWidget';

    public $fields = [
        'name' => 'Modules\Architect\Fields\Types\Text',
        'icon' => 'Modules\Architect\Fields\Types\Text',
        'url' => 'Modules\Architect\Fields\Types\Url',
    ];

    public $rules = [
        'required'
    ];

    public $hidden = false;

    public $settings = [
      'htmlId',
      'htmlClass',
      'tableElements',
      'hiddenFilter',
      'conditionalVisibility'
    ];
}
?>
