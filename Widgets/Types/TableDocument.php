<?php

namespace Modules\Architect\Widgets\Types;

use Modules\Architect\Widgets\Widget;
use Modules\Architect\Widgets\WidgetInterface;

use Modules\Architect\Entities\Content;
use Modules\Architect\Entities\ContentField;
use Modules\Architect\Entities\Language;

class TableDocument extends Widget implements WidgetInterface
{
    public $type = 'widget';
    public $icon = 'fa fa-table';
    public $name = 'TABLE_DOCUMENT';
    public $component = 'CommonWidget';

    public $fields = [
        'title' => 'Modules\Architect\Fields\Types\Text'
    ];

    public $rules = [
        'required'
    ];

    public $hidden = false;

    public $settings = [
      'collapsable',
      'collapsed',
      'bootstrapColumns',
      'tableElements',
      'conditionalVisibility',
      'itemsPerPage'
      
    ];
}
?>
