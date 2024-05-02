<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    // subscribe
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // save email to database
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();
        return back()->with('success', 'You have been successfully subscribed to our newsletter');
    }
}
