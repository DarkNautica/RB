<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to('your_email@example.com') // Replace with your email
                ->subject('Contact Form Submission from ' . $request->name)
                ->from($request->email);
        });

        return back()->with('success', 'Your message has been sent!');
    }
}
