<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'posts' => Post::latest()->take(3)->get(),
        ]);
    }
}
