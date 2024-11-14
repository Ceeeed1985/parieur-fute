<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('home');
    }
    public function pronos(): View
    {
        return view('pronos');
    }

}
