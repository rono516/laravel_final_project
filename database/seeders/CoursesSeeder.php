<?php

namespace Database\Seeders;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('courses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $course = new Course();
        $course->title = 'Laravel';
        $course->teacher = 'Rono Collins';
        $course->short_description = 'This course will introduce you to laravel basics';
        $course->description = 'Laravel is a php framework which uses  blade templating and MVC architecture';
        $course->price = 500.00;
        $course->image_url = 'https://www.google.com';
        $course->start_date = Carbon::create('2022','8', '9');
        $course->is_active = true;
        $course->save();

        $course = new Course();
        $course->title = 'Django';
        $course->teacher = 'Rono Collins';
        $course->short_description = 'This course will introduce you to django basics';
        $course->description = 'Django is a python framework which uses  blade templating and MVC architecture';
        $course->price = 600.00;
        $course->image_url = 'https://www.google.com';
        $course->start_date = Carbon::create('2022', '09', '09');
        $course->is_active = true;
        $course->save();


    }
}
