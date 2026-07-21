<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function emp() {
        // print_r('hiii');
        // exit();
        return view('employee');
    }

}
