<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function blog(): View
    {
        return view('posts.posts', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
