<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $user = Auth::user();
        return view('contact', compact('user'));
    }

    public function contactSent(Request $request)
    {
        $request->validate(
            [
            'email' => 'required',
            'name' => 'required',
            'message' => 'required',
            ]
        );
        $message = new Message($request->message);
        Mail::to('90b7196938-02c3fb@inbox.mailtrap.io')->send($message);
    }
}
