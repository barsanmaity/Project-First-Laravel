<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\HitMiddleware;

class HitMiddle extends Controller
{
    public function hold() {
        return view('handle');
    }
}
