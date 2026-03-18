<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // this saves to database
        Contact::create($validated);

        // Debug
        \Log::info('Attempting to send email');

        // this sends the email, change email here when website is live
        Mail::raw("Name: {$validated['name']}\nEmail: {$validated['email']}\n\nMessage:\n{$validated['message']}", function ($message) {
            $message->to('your-email@gmail.com')
                    ->subject('New Contact Form Submission');
        });

        \Log::info('Email sent successfully');

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for contacting us! We will get back to you soon.'
        ], 201);

    } catch (\Exception $e) {
        \Log::error('Error in contact form: ' . $e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => 'Please fill out all fields correctly.'
        ], 422);
    }
}
}
