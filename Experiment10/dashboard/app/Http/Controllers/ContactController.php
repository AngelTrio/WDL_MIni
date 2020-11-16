<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\contact_me;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    public function contact()
    {
    	return view('frontend/index');
    }

    public function sendEmail(Request $request)
    {
    	$details = [
    		'name' => $request->name,
    		'email' => $request->email,
    		'message' => $request->message,
    	];
    	
    	Mail::to('asiyapathan2000@gmail.com')->send(new ContactMail($details));
    	return back()->with('message_sent','Your message has been sent successfully!');
    }
}
