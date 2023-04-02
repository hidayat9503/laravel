<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('categories')) {
            $categories = Categories::firstWhere('slug', request('categories'));
            $title = ' in ' . $categories->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'categories', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'appname' => config('app.name'),
            'post' => $post
        ]);
    }
}
