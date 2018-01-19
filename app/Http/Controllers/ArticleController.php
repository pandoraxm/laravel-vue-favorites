<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Post::paginate(5);
        return view('home.article.index', compact('data'));
    }

    public function show($id)
    {
        $data = Post::find($id);
        return view('home.article.list', compact('data'));
    }

    public function favoritePost(Post $post)
    {
        Auth::user()->favorites()->attach($post->id);

        return back();
    }

    public function unFavoritePost(Post $post)
    {
        Auth::user()->favorites()->detach($post->id);

        return back();
    }
}
