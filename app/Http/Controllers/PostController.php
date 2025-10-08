<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('post.index', ['posts' => $data]);
    }

    public function create()
    {
        Post::create([
            'title' => 'My first post',
            'body' => 'this is the descreption of the post',
            'author' => 'youssef',
            'published' => true,
        ]);
        return redirect('/blog');
    }

    public function show($id)
    {

        $data = Post::findOrFail($id);
        $commentData = Comment::find($data->id);
        return view('post.show', ['post' => $data, 'comments' => $commentData]);
    }
}
