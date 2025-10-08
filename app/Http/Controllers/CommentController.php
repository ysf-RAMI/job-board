<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::all();
        return view('comment.index', ['comments' => $data]);
    }

    public function create()
    {
        Comment::create([
            'author' => 'youssef',
            'content' => 'this is the content of the comment',
            'post_id' => 1,
        ]);
        return redirect('/show/1');
    }

    public function show($id)
    {

        $data = Comment::findOrFail($id);
        return view('comment.show', ['comment' => $data]);
    }
}
