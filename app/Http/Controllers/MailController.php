<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuickMailMessage;
use Illuminate\Http\Request;


class MailController extends Controller
{
    public function mailForm()
    {
        return view('mail.mail');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string',
            'body' => 'required|string',
        ]);

        Mail::to($validated['to'])->send(new QuickMailMessage($validated));

        auth()->user()->mails()->create($validated);

        return back()->with('success', 'Email sent successfully!');
    }

    
}
