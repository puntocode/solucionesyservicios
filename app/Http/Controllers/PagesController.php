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
            'email' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);
        Mail::to('info@solucionesyservicios.com.ar')->send(new CotizacionMailable($data));

        return back()->with('mail', 'Ok');
    }


}
