<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Category $category)
    {
        return view('blog.index', [
            'posts' => $category->posts()->latest()->paginate(10),
            'categories' => Category::latest()->get(),
        ]);
    }
}
