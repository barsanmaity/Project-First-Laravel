<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class,'emp'])
->name('employeEmp');

// Route::get('/employee/header', [EmployeeController::class,'head']);
