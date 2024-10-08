<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'Posts';  // Your existing table name
    protected $primaryKey = 'post_id';  // Primary key in the Posts table
    protected $fillable = ['title', 'content', 'author'];

    // Disable Laravel's automatic timestamps (created_at and updated_at)
    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
