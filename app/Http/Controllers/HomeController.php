<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        return view('blog.index', [
            'posts' => Post::paginate(10),
            'categories' => Category::all(),
        ]);
    }
}
