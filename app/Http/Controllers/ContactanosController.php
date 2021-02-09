<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre'=>'required',
            'email'=>'required|email',
            'mensaje'=>'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('fhidalgoaragon@iessonferrer.net')->send($correo);
        return redirect()->route('indiceEmail')->with('info','Mensaje enviado');
    }
}
