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
Route::resource('students','App\Http\Controllers\StudentController');
Route::get('/add-students'            ,[StudentController::class,'addStuShow']);
Route::post('/add-students-post'      ,[StudentController::class,'addStudent']);