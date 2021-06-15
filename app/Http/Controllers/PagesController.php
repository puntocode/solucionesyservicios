<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CotizacionMailable;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function cotizacionMail(Request $request){

        $data = $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);
        Mail::to('puntocodepy@gmail.com')->send(new CotizacionMailable($data));
        return response()->json(['success']);
        // return view('mail.solicitar-cotizacion');
    }
}
