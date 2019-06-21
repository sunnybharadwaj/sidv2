<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class MessagesController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);



        try {
            $query = new Message();
            $query->name = request('name');
            $query->email = request('email');
            $query->subject = request('subject');
            $query->message = request('message');
            $query->save();
            session()->flash("message", "Thank you for your message. I'll get back to you as soon as I can.");
            redirect('/');

        } catch (QueryException $ex) {
            session()->flash("message", "Something is wrong. Please try later.");
            redirect('/');
        }
    }
}
