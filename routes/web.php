<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/students/unsponsored', [\App\Http\Controllers\StudentController::class, 'getAllStudents']);
