<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller

{
    public function store(Request $request)
    {
        // Validate the comment data
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|string',
        ]);

        // Create a new comment instance
        $comment = new Comment();
        $comment->post_id = $validatedData['post_id'];
        $comment->user_id = auth()->id(); // Assuming you have user authentication
        $comment->body = $validatedData['body'];
        $comment->save();

        // Optionally, you can redirect the user back to the post after storing the comment
        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }
}

