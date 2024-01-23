<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'body'=> 'required',
        ]);

        $blog->comments()->create([
            'body' => $request->input('body'),
        ]);

        return redirect()->route('blogs.show', $blog->id)
            ->with('success', 'Comment posted successfully');
    }
}
