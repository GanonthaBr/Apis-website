<?php

namespace App\Http\Controllers;

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
        return back()->with('success', 'You have been successfully subscribed to our newsletter');
    }
}
