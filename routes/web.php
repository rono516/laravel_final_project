<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LessonsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontendController::class, 'index']);
Route::view('/dashboard', 'dashboard.dashboard')->middleware('perm:2');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('modules', [CoursesController::class, 'modules_index']);
Route::get('courses', [CoursesController::class, 'course_index']);
Route::get('lessons', [CoursesController::class, 'lessons_index']);
Route::post('lesson/create', [CoursesController::class, 'lesson_store']);

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::post('start_course/{id}', [FrontendController::class, 'start_course']);
    Route::get('my_courses',[FrontendController::class, 'my_courses']);
});

Route::get('all', [FrontendController::class, 'all_courses']);
Route::get('{id}', [FrontendController::class, 'view_course']);




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::view('/redirect', 'redirect')->middleware('perm:1');

Route::post('course/create', [CoursesController::class, 'course_store']);
Route::post('course/delete',[CoursesController::class, 'course_delete']);
Route::get('course/edit/{id}',[CoursesController::class, 'course_edit'])->name('edit-course');
Route::post('course/update', [CoursesController::class, 'course_update']);

Route::post('module/create', [CoursesController::class, 'modules_create']);
Route::get('module/edit/{id}',[CoursesController::class, 'modules_edit'])->name('edit-module');
Route::post('module/update', [CoursesController::class, 'module_update']);
Route::post('module/delete', [CoursesController::class, 'module_delete']);




//Route::view('index', 'frontend.index');

//Route::view('single_course/{id}', 'viewcourse');
//Route::get('{id}', function ()
//    {
//        return view('viewcourse');
//    });

