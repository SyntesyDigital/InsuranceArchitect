<?php

namespace Modules\Architect\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Architect\Entities\Language;
use Modules\Architect\Entities\StyleField;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use Modules\Architect\Entities\StyleField;

class ArchitectDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'Català',
            'iso' => 'ca'
        ]);

        Language::create([
            'name' => 'Español',
            'iso' => 'es'
        ]);

        Language::create([
            'name' => 'English',
            'iso' => 'en'
        ]);

        //add style forms
        DB::table('styles')->insert([
            'identifier' => 'front',
            'icon' => 'fas fa-desktop'
        ]);
        DB::table('styles')->insert([
            'identifier' => 'back',
            'icon' => 'fas fa-user-lock'
        ]);



        //add front and back seeder

        Model::unguard();

        //front style seeder
        StyleField::create([
          'name' => 'frontPrimary'
          'value' => '{"type":"color","value":"#e84b37"}'
          'style_id' => 1
        ]);

        StyleField::create([
          'name' => 'frontHeaderRightPartBackgroundColor'
          'value' => '{"type":"color","value":"#e7eaef"}'
          'style_id' => 1
        ]);

        Model::unguard();

    }
}
