<?php

namespace Modules\Architect\Tests\Feature\Core;

use Modules\Architect\Tests\TestCase;
use Modules\Architect\Entities\Content;

use Modules\Architect\Entities\Errors\ContentError;

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
        $content->saveError(ContentError::class);

        $this->assertSame(1, $content->errors->count());
    }

    public function testGetError()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        $content->saveError(ContentError::class);

        $this->assertSame(ContentError::class, get_class($content->getError(ContentError::class)));
    }

    public function testErrorMessage()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        $content->saveError(ContentError::class);

        $error = $content->getError(ContentError::class);

        $this->assertSame($content->getField('title'), $error->getMessage());
    }

    public function testgetAllErrors()
    {
        $content = (new CreateContent($this->attributes['page']))->handle();
        
        $content->saveError(ContentError::class);
        $content->saveError(ContentError::class);
        $content->saveError(ContentError::class);

        $this->assertSame(1, $content->getErrors()->count());
        $this->assertSame(ContentError::class, get_class($content->getErrors()->first()));
    }
}
