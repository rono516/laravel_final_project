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
        return view('welcome')->with([
            'courses' => $courses,
//            'course_modules' => $course_modules
        ]);
    }

    public function view_course($id){
        $course = Course::find($id);
        $modules = Module::all()->where('course_id', $course->id);
        return view('course_view') ->with([
            'course' => $course,
            'modules' => $modules
        ]);
    }
}
