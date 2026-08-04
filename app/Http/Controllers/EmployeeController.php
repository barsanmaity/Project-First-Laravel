<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function emp() {
        return view('employee');
    }

    public function showRegister() {
        return view('register');
    }

   public function register(Request $resquest) {
    $resquest->validate([
        'emp_name' => 'required',
        'emp_email' =>'required|email|unique:users, email',
        'emp_password' =>'required|min:8|confirmed',
    ]);
    User::create([
        'name' => $resquest->name,
        'email' =>$request->email,
        'password' =>Hash::make($request->password),
    ]);

    return redirect('/login')->with('success','Registrartion successfull');
   }

}
