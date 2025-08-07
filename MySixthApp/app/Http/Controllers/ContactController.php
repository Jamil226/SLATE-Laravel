<?php

namespace App\Http\Controllers;

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
    }
}