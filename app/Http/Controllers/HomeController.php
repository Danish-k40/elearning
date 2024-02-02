<?php

namespace App\Http\Controllers;

use App\Services\HomeServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct(HomeServices $homeServices)
    {
        $this->homeServices = $homeServices;
    }

    public function index()
    {
        $courses = $this->homeServices->getCourses()['result'] ?? [];
        return view('home', compact('courses'));
    }
}
