<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // The migration created the table as 'comment' (singular).
    // Keep the model consistent with the DB to avoid "no such table: comments" errors.
    protected $table = 'comments';

    protected $fillable = ['author', 'content', 'post_id'];

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
