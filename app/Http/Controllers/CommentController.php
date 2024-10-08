<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Validate the input fields
        $request->validate([
            'comment_content' => 'required',
            'commenter' => 'required',
        ]);
    
        // Check if the post exists
        $post = Post::find($postId);
    
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
    
        // Create the comment
        Comment::create([
            'post_id' => $postId,
            'comment_content' => $request->comment_content,
            'commenter' => $request->commenter,
        ]);
    
        return response()->json(['message' => 'Comment added successfully']);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
