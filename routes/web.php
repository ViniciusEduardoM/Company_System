<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DependantController;

// Home
Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('departments', DepartmentController::class);

Route::resource('dependants', DependantController::class);

Route::resource('employees', EmployeeController::class);