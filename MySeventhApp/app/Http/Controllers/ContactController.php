<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function submitRecord(Request $request)
    {
        // dd($request);
        // dd($request->toArray());
        // $myRequest = $request->toArray();
        // print_r($myRequest);
        // die;

        $request->validate(
            [
                'fullname' => 'required|min:3|max:100',
                'email' => 'required|email|min:7|max:100',
                'phone' => 'required|min:11|max:11',
                'subject' => 'required',
                'message' => 'required|min:5|max:1000'
            ]
        );

        $FullName = $request->fullname;
        $Email = $request->email;
        $Phone = $request->phone;
        $Subject = $request->subject;
        $Message = $request->message;

        $IP = $request->ip();
        $Status = 0;

        $contact = new ContactModel();

        // $contact->fullname = $request->fullname;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->subject = $request->subject;
        // $contact->message = $request->message;
        $contact->fullname = $FullName;
        $contact->email = $Email;
        $contact->phone = $Phone;
        $contact->subject = $Subject;
        $contact->message = $Message;
        $contact->ip = $IP;
        $contact->status = $Status;
        $contact->save();

        return back()->withSuccess("Thanks for Contacting Us. We'll respond you ASAP!");
    }
}