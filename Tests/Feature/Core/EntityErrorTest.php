<?php

namespace Modules\Architect\Tests\Feature\Core;

use Modules\Architect\Tests\TestCase;
use Modules\Architect\Entities\Content;

use Modules\Architect\Entities\Errors\EntityError;

use Modules\Architect\Jobs\Content\CreateContent;

class EntityErrorTest extends TestCase
{

    private $attributes = [

        'page' => [
            'status' => 0,
            'typology_id' => null,
            'is_page' => true,
            'definition' => [],
            'translations' => [
                'es' => true,
                'en' => true,
                'ca' => true,
            ],
            'fields' => [

                [
                    'identifier' => 'title',
                    'type' => 'text',
                    'value' => [
                        'es' => 'Mi pagina (Spanish)',
                        'en' => 'My page (English)',
                        'ca' => 'Mi pagine (Catala)'
                    ]
                ],

                [
                    'identifier' => 'slug',
                    'type' => 'slug',
                    'value' => [
                        'es' => 'mi-pagina-spanish',
                        'en' => 'my-page-english',
                        'ca' => 'mi-pagine-catala'
                    ]
                ],


                [
                    'identifier' => 'description',
                    'type' => 'richtext',
                    'value' => [
                        'es' => 'Lorem ipsum...',
                        'en' => 'Lorem ipsum...',
                        'ca' => 'Lorem ipsum...',
                    ]
                ],
            ]
        ]
    ];

    public function testCreateError()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        $content->saveError(EntityError::class);

        $this->assertSame(1, $content->errors->count());
    }

    public function testGetError()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        $content->saveError(EntityError::class);

        $this->assertSame(EntityError::class, get_class($content->getError(EntityError::class)));
    }

    public function testErrorMessage()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        $content->saveError(EntityError::class);

        $error = $content->getError(EntityError::class);

        $this->assertSame($content->getField('title'), $error->getMessage());
    }

    public function testgetAllErrors()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        
        $content->saveError(EntityError::class);
        $content->saveError(EntityError::class);
        $content->saveError(EntityError::class);

        $this->assertSame(3, $content->getErrors()->count());
        $this->assertSame(EntityError::class, get_class($content->getErrors()->first()));
    }
}
