<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Post $post)
    {
        return view('blog.show', compact('post'));
    }
}
