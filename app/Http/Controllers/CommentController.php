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
            'author' => 'younes',
            'content' => 'this is the content of the second comment',
            'post_id' => 2,
        ]);

        return redirect('/comments');
    }

    public function delete($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect('/comments');
    }

    
}
