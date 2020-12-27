<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contactUs.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'message' => 'required'
        ]);

        $mail = new ContactanosMailable($request->all());
        Mail::to('ajarizaga@gmail.com')->send($mail);
                                                //paso una variable de sesion y un mensaje
        return redirect()->route('contactUs.index')->with('info', 'Mensaje enviado');
    }
}
