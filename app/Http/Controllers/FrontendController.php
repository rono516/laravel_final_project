<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
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


    public function start_course(Request $request, $id){
        $course = Course::find($id);
//        dd($course->title);

        $courseStudent = new CourseStudent();
        $courseStudent->course_id = $course->id;
        $courseStudent->user_id = Auth::id();
        $courseStudent->save();
       $request->session()->flash('success', 'Course registered successfully');
       return redirect()->back();
    }

    public function my_courses(){
        $coursesStudent = CourseStudent::orderBy('id', 'DESC')->where('user_id', Auth::id())->first();
//        $courses = Course::where();
//        foreach ($coursesStudent as $course){
//            dd();
//        }

//        foreach ($coursesStudent as $studentCourse){
//            $courses = Course::all()->where('id', '=', $studentCourse->course_id)    ;
//        }
//        dd($coursesStudent->count());
        $courses = Course::all()->where('id', '=', $coursesStudent->course_id);

        return view('frontend.mycourses')->with([
            'coursesStudent' => $coursesStudent,
            'courses' =>$courses
        ]);
    }
}
