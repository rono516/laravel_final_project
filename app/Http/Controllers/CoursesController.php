<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public  function course_index(){

        $courses = Course::all();
        return view('dashboard.courses')->with([
            'courses' => $courses
        ]);
    }



    public function course_store(Request $request){

//        $this->validate($request, [
//            'course_name' => 'required|unique',
//            'teacher_name' => 'required',
//
//        ]);

        $course = new Course();
        $course->title = $request->course_name;
        $course->teacher = $request->teacher_name;
        $course->short_description = $request->short_description;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->duration = $request->duration;
//        $course->image_url = $request->image_url;
        $course->start_date = $request->start_date;
        $course->is_active = $request->is_active == "on";

        if ($request->hasFile('image')){
            $course->image_url = $request->file('image')->store('images', 'public');
        }

        $course->save();
        $request->session()->flash('sucess', 'course has been added successfully');
        return redirect()->back();

    }
    public function course_delete(Request $request){
//        $this->validate($request,[
//            'course_id' => 'required|exists:courses, id'
//        ]);

        try {
            $course = Course::find($request->course_id);
            $course->delete();
            $request->session()->flash('success', 'course deleted successfully');
            return redirect()->back();

        }catch (\Exception $exception){
            $request->session()->flash('warning', 'Cannot delete this course');
            return redirect()->back();
        }

    }

    public function course_edit($id){
        $course = Course::find($id);
        return $course;
    }

    public function course_update(Request $request){
        $this->validate($request, [
//            'course_id' => 'required|exists:courses, id',
            'teacher_name' => 'required',
            'price' => 'required|numeric'
        ]);

        $course = Course::find($request->id);

//        if (!course){
//            abort('404');
//        }

        $course->title = $request->course_name;
        $course->teacher = $request->teacher_name;
        $course->short_description = $request->short_description;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->price = $request->price;

        $course->start_date = $request->start_date;
        if ($request->hasFile('image')){
            $course->image_url = $request->file('image')->store('images', 'public');
        }
        $course->is_active = $request->is_active == "on";
        $course->update();

        $request->session()->flash('success', 'Course updated successfully');
        return redirect()->back();


    }

    public function modules_index(){
        $modules = Module::all();
        return view('dashboard.modules')->with([
            'modules' => $modules
        ]);
    }

    public function modules_create(Request $request){
        $this->validate($request, [
            'position' => 'required|numeric',
//            'title' => 'required|unique',
//            'course_id' => 'required'
        ]);

        $module = new Module();
        $module->course_id = $request->course_id;
        $module->title = $request->title;
        $module->description = $request->description;
        $module->position = $request->position;

        $module->active = $request->active == "on";
        //== "on" ? true: false
        $module->save();

        $request->session()->flash('success', 'Module added successfully');
        return redirect()->back();
    }

    public function modules_edit($id){
        $module = Module::find($id);
        return $module;
    }

    public function module_update(Request $request){
        $this->validate($request, [
//            'course_id' => 'required|exists:courses, id',
//            'title' => 'required',
//            'position' => 'required|unique:modules,position'.$request->id,
        ]);

        $module = Module::find($request->id);

        if (!module){
            abort('404');
        }
        $module->course_id = $request->course_id;
        $module->title =$request->title;
        $module->description = $request->description;
        $module->position = $request->position;
        $module->active = $request->active == "on";
        $module->update();

        $request->session('success', 'Module Updated Successfully');
        return redirect()->back();
    }

    public function module_delete(Request $request){

//        $this->validate($request, [
//            'id' => 'exists:modules,id'
//        ]);

        try {
            $module = Module::find($request->module_id);
//            dd($module);
            $module->delete();
            $request->session()->flash('success', 'module deleted successfully');
            return redirect()->back();
        }catch (\Exception $exception){
                request()->session()->flash('warning', "Can not delete product because it is being used in the system");
                return redirect()->back();

            }

    }


//    lessons
    public function lessons_index(){
        $lessons = Lesson::all();
//        $courseModules = Module::all()->where('id', '=', '');
        return view('dashboard.lessons')->with([
            'lessons' => $lessons
        ]);
    }

    public function lesson_store(Request $request){
        $this->validate($request, [
//            'module_id' => 'required',
//            'title' => 'required'
        ]);

        $lesson = new Lesson();
        $lesson->module_id = $request->module_id;
        $lesson->title = $request->title;
        $lesson->video_link = $request->video_url;
        $lesson->lesson_text = $request->description;
        $lesson->is_active = $request->is_active == "on";

        if ($request->hasFile('image')){
            $lesson->lesson_image = $request->file('image')->store('images', 'public');
        }

        $lesson->save();
        request()->session()->flash('success', 'Lesson added successfully');
        return redirect()->back();

    }

}
