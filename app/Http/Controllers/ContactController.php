<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmissionMail;
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


        Mail::to(config('mail.admin_email'))->send(new FormSubmissionMail($data));
        return redirect()->back()->with('success', 'Contact message sent successfully.');
    }
}
