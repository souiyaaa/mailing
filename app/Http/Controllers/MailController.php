<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate using the actual field name from your form
        $request->validate([
            'new_account_mail' => 'required|email',
            'password' => 'required|string',
            're-password' => 'required|string|same:password',
            'name' => 'required|string',
            'birthdate' => 'required|date',
        ]);

        // Send email
        Mail::to($request->new_account_mail)->send(new TestMail($request->all()));
        return back()->with('success', 'Email sent successfully!');
    }
}

