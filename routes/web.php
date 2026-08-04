<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Middleware\HitMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('hit')->group(function() {

Route::get('/employee', [EmployeeController::class,'emp']);
Route::get('/employee/register', [EmployeeController::class,'showregister']);
Route::post('/employee/register', [EmployeeController::class, 'register']);

// Route::get('/employee/header', [EmployeeController::class,'head']);

});


