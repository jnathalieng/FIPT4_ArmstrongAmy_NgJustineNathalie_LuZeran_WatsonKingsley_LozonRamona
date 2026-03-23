<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $errors = [];
        if(empty($request->name)) $errors['name'] = 'Name field cannot be empty';
        if(empty($request->message)) $errors['message'] = 'Message field cannot be empty';
        if(empty($request->email)) {
            $errors['email'] = 'You must provide an email';
        } else if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'You must provide a valid email';
        }
        if(!empty($request->honeypot)) {
            return response()->json(['errors' => ['general' => 'Invalid submission']], 400);
        }

        if(!empty($errors)) {
            return response()->json(['errors' => $errors], 422);
        }
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Send email
        // Mail::send(...);

        return response()->json(['message' => 'Message sent successfully!']);
    }
}