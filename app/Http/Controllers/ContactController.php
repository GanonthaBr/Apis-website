<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('partials.contacts.index');
    }

    //store
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ],
            //custom message
            [
                'name.required' => 'Le nom est obligatoire',
                'email.required' => 'L\'email est obligatoire',
                'email.email' => 'L\'email doit être valide',
                'message.required' => 'Le message est obligatoire',

            ]

        );
        //declare array $data variable with all of the request data
        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ];
        //send email to admin at dev@apis-sahel.org
        Mail::to('dev@apis-sahel.org')->send(new ContactMail($data));

        //store
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->subject = $request->subject;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        //redirect
        return redirect()->back()->with('success', 'Votre Message a été envoyé avec succès!');
    }
}
