<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'posts' => Post::latest()->filter(request('search', 'category')
            )->get(),
            'categories' => \App\Models\Category::all()
        ]);

    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,

        ]);
    }




}
