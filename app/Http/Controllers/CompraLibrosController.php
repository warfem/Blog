<?php

namespace App\Http\Controllers;
use App\Mail\CompraLibrosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CompraLibrosController extends Controller
{
    

    public function index(){
        return view('libros');
    }

    public function store(Request $request){

        $request->validate([
            'nombre'=>'required',
            'titulo'=>'required',
         ]);
        $correo = new CompraLibrosMailable($request->all());
        Mail::to('fhidalgoaragon@iessonferrer.net')->send($correo);
        return redirect()->route('indiceComprar')->with('info','Libro Reservado');
    }
}
