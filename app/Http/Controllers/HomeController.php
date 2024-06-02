<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::with('user', 'category')
            ->when($request->query('search'), function (Builder $query) use ($request) {
                return $query->where('title', 'LIKE', '%' . $request->query('search') . '%')
                    ->orWhere('body', 'LIKE', '%' . $request->query('search') . '%');
            })
            ->when($request->query('category'), function (Builder $query) use ($request) {
                // return $query->whereHas('category', function (Builder $query) use ($request) {
                //     return $query->where('slug', $request->query('category'));
                // });

                return $query->whereRelation('category', 'slug', $request->query('category'));
            })
            ->latest()
            ->paginate(10);
            
        return view('blog.index', [
            'posts' => $posts,
            'categories' => Category::withCount('posts')->latest()->get(),
        ]);
    }
}
