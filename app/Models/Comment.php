<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comments';
    protected $primaryKey = 'comment_id';
    protected $fillable = ['post_id', 'comment_content', 'commenter'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
