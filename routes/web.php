<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get("regform",[\App\Http\Controllers\StudentController::class,"regform"]);
Route::post("save",[\App\Http\Controllers\StudentController::class,"save"]);
Route::get("edit/{id}",[\App\Http\Controllers\StudentController::class,"edit"]);
Route::post("update",[\App\Http\Controllers\StudentController::class,"update"]);
Route::get("teacherform",[\App\Http\Controllers\TeacherController::class,"regform"]);
