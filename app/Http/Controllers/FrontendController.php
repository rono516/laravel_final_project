<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('frontend.index')->with([
            'courses' => $courses,
        ]);
    }

    public function view_course($id){
        $course = Course::find($id);
        if (!$course){
            abort('404');
        }
        $modules = Module::all()->where('course_id', $course->id);
//        dd($modules->lessons()->count());
        //hello
        return view('viewcourse') ->with([
            'course' => $course,
            'modules' => $modules,
        ]);
    }

    public function all_courses(){
        $courses = Course::all();
//        $courses = Course::all()->get()->paginate();
        return view('frontend.all_courses')->with([
            'courses' => $courses
        ]);
    }


    public function start_course(Request $request){
       $course = Course::where('id','=' ,$request->course_id);
       $course->students()->attach(Auth::id());


       $request->session()->flash('success', 'Course added successfully');
       return redirect()->back();
    }
}
