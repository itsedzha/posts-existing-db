<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'comment_content' => 'required',
            'commenter' => 'required',
        ]);

        return Comment::create([
            'post_id' => $postId,
            'comment_content' => $request->comment_content,
            'commenter' => $request->commenter,
        ]);  // Create a new comment for a post
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
