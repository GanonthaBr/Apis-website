<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Egulias\EmailValidator\Parser\Comment;
use Exception;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'comment' => 'required',
                'blog_id' => 'required|exists:blogs,id',
            ]);
            $comment  = new Comments();

            $comment->user_id = 1;
            $comment->blog_id = $request->blog_id;
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back();
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
