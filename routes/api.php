<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students/unsponsored', [\App\Http\Controllers\StudentController::class, 'getAllStudents']);
