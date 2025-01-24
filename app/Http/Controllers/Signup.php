<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signup extends Controller
{
    public function create()
    {
    return view('auth.singnUp');
  }
}
