<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class MessageController extends Controller
{
    //
    public function store()
    {
        try {
            $query = new Message();
            $query->name = request('name');
            $query->email = request('email');
            $query->subject = request('subject');
            $query->message = request('message');
            $query->save();
            session()->flash("message", "Thank you for your message. I'll get back to you as soon as I can.");
            redirect('/contact');

        } catch (QueryException $ex) {
            session()->flash("message", "Something is wrong. Please try later.");
            redirect('/contact');
        }

        return redirect('/contact');
    }
}
