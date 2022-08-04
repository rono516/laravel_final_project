<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function lessons_index(){
        $lessons = Lesson::all();
        return view('dashboard.lessons')->with([
            'lessons' => $lessons
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
        $module->course_id = $request->course_id;
        $module->title =$request->title;
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
            dd($module);
            $module->delete();
            $request->session()->flash('success', 'module deleted successfully');
            return redirect()->back();
        }catch (\Exception $exception){
            request()->session()->flash('warning', "Can not delete product because it is being used in the system");
            return redirect()->back();

        }}

    }
