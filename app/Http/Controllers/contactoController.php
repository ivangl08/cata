<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\contactoMailable;
use Illuminate\Support\Facades\Mail;

class contactoController extends Controller
{
    //Muesta la vista "contato"
    public function index(){
        return view('contacto');
    }

    //Controla el envio de correo eslectronicos
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required'
        ]);

        $correo = new contactoMailable($request->all());
        Mail::to('cchristian302@gmail.com')->send($correo);
        return redirect()->route('contacto')->with('alerta', "Mensaje enviado.");

    }
}
