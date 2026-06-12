<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Egulias\EmailValidator\Parser\Comment;
use Exception;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    // list of all comments

    public function store(Request $request)
    {
        try {
            $request->validate([
                'comment' => 'required',
                'blog_id' => 'required|exists:blogs,id',
            ]);
            $comment  = new Comments();

            $comment->user_id = auth()->id();
            $comment->blog_id = $request->blog_id;
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back();
        } catch (\Throwable) {
            return back()->with('error', 'une erreur est survenue');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    //delete a comment
    public function destroy($id)
    {
        try {
            $comment = Comments::find($id);
            if ($comment) {
                $comment->delete();
                return redirect()->back();
            }
            return response()->json(['error' => 'Comment not found'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
