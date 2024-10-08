<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comments';  // Your existing table
    protected $primaryKey = 'comment_id';  // Primary key in the Comments table
    protected $fillable = ['post_id', 'comment_content', 'commenter'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
