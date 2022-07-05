<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('modules')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $module = new Module();
        $module->course_id = 1;
        $module->title = 'Eloquent models';
        $module->description = 'An introduction to Eloquent models or ORM in Laravel';
        $module->active = true;


//        'course_id',
//        'title',
//        'description',
//        'active'


        $module = new Module();
        $module->course_id = 2;
        $module->title = 'Python basics';
        $module->description = 'An introduction to Python basics before we dive into django';
        $module->active = true;
//
//             'course_id',
//        'title',
//        'description',
//        'active'

    }
}
