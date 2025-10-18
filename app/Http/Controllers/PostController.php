<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Eager load comments to avoid N+1 and ensure comments are available in the view
        $data = Post::with('comments')->get();

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

        $post = Post::with('comments')->findOrFail($id);

        // Pass the post; view can use $post->comments
        return view('post.show', ['post' => $post]);
    }

        public function delete ($id)
    {
        Post::destroy($id);
        
    }
}
