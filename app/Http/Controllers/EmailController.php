<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use App\Models\EmailAccount;

class EmailController extends Controller
{
    /**
     * Display a listing of all emails.
     */
    public function index()
    {
        // Load emails with their related Email_Account and Accounts
          $emails = Email::with('emailAccount.accounts')->get();

        // Pass to view
        return view('index', compact('emails'));
    }

    public function create()
    {
        $emailAccounts = EmailAccount::all(); // existing accounts
        return view('create', compact('emailAccounts'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'subject' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'email_account_id' => 'nullable|exists:email_accounts,id',
    //         'new_account_mail' => 'nullable|email|max:255',
    //     ]);

    //     // If a new account email is provided, create it
    //     if ($request->filled('new_account_mail')) {
    //         $emailAccount = EmailAccount::create();
    //         $emailAccount->accounts()->create([
    //             'account_mail' => $request->new_account_mail,
    //         ]);
    //     } else {
    //         $emailAccount = EmailAccount::find($request->email_account_id);
    //     }

    //     // Create the email
    //     Email::create([
    //         'name' => $request->name,
    //         'subject' => $request->subject,
    //         'content' => $request->content,
    //         'email_account_id' => $emailAccount->id,
    //     ]);

    //     return redirect()->route('emails.index')->with('success', 'Email created successfully!');
    // }


}
