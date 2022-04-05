<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EmployeeController;
use \App\Http\Controllers\LoginEmployeeController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeTaskController;

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

//Route::get('/welcome', function () {
//    return view('welcome');
//});
Route::get('/',[EmployeeController::class,'index']);
Route::get('/register',[EmployeeController::class,'register']);
Route::get('/show',[EmployeeController::class,'store']);
Route::get('/login',[EmployeeController::class,'create']);
Route::get('/logout', [EmployeeController::class,'destroy']);
Route::get('/createLogin',[EmployeeController::class,'show'])->middleware('checkEmail');
Route::get('/AddTask',[TasksController::class,'store']);
Route::get('/makeTask',[TasksController::class,'index']);
Route::get('/assignTask/{id}/{taskid}',[TasksController::class,'create']);
Route::get('/welcome',[TasksController::class,'show']);
Route::get('/AddProject',[TasksController::class,'project']);
Route::get('/task/{id}',[EmployeeController::class,'assign']);
Route::get('/index',[ProjectController::class,'index']);
Route::get('/tasks',[EmployeeTaskController::class,'index']);

