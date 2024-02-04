<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends CoreInfController
{

    public function index()
    {
        $courses = $this->courseList();
        return view('home', compact('courses'));
    }

    public function register()
    {   return view('register');

    }
}
