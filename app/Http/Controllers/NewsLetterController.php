<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsLetterController extends Controller
{
    // subscribe
    public function subscribe(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email'
            ]);

            // save email to database
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $newsletter->save();
            return redirect()->route('home')->with('success', 'You have been successfully subscribed to our newsletter');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->with('error', 'You have already subscribed to our newsletter');
            }
            return back()->with('error', 'Something went wrong, please try again');
        } catch (ValidationException $e) {
            return back()->with('error', 'Email Invalid!');
        }
    }
}
