<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmissionMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->only('name', 'email', 'message'));

        // you can send a notification or email here
        Mail::to(config('mail.admin_email'))->send(new FormSubmissionMail($data));
        // Mail::to($request->email)->send(new ContactMessageSent($request->all()));
        //return view('emails.contact', compact('data'));

        return redirect()->back()->with('success', 'Contact message sent successfully.');
    }
}
