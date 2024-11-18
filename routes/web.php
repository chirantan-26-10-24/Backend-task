<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class,'users']);
Route::get('remove',[UserController::class,'remove']);
Route::get('/students',[StudentController::class,'getStudents']);
Route::get('/delete/{id}',[StudentController::class,'delete']);
Route::view('addStudent','addStudent');
Route::post('upload',[StudentController::class,'upload']);
