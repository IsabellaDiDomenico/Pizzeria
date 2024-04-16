<?php

namespace App\Http\Controllers;

use App\Mail\sendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function send(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'date'=> 'required',
            'time'=> 'required',
            'people'=> 'required',
        ]);

    
        $data = [
            'name'=> $request->name ,
            'email'=> $request->email ,
            'message'=> $request->message ,
            'phone'=> $request->phone,
            'date'=> $request->date,
            'time'=> $request->time,
            'people'=> $request->people,
        ];

        Mail::to('admin@hotmail.it')->send(new sendContactMail($data));
        return redirect()->back()->with('message', 'Messaggio inviato correttamente.');

    }
}
