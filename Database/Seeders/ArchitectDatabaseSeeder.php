<?php

namespace Modules\Architect\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Architect\Entities\Language;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Français',
            'iso' => 'fr'
        ]);

        Model::unguard();

    }
}
