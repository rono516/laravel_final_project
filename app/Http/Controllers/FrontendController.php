<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $courses = Course::all();
//        $course_modules = Module::where('course_id', $courses->id);
        return view('frontend.index')->with([
            'courses' => $courses,
//            'course_modules' => $course_modules
        ]);
    }

    public function view_course($id){
//        $courses = Course::all();
        $course = Course::find($id);
        if (!$course){
            abort('404');
        }
        $modules = Module::all()->where('course_id', $course->id);
//        dd($course->modules->lessons->count());
        return view('viewcourse') ->with([
            'course' => $course,
            'modules' => $modules,
//            'courses' => $courses
        ]);
    }

    public function all_courses(){
        $courses = Course::all();
//        $courses = Course::all()->get()->paginate();
        return view('frontend.all_courses')->with([
            'courses' => $courses
        ]);
    }
}
