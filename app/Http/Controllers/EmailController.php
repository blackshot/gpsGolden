<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MySendEmail;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;
// use App\Mail\MailNotify;

class EmailController extends Controller
{
    public function sendEmailContact(Request $request){
        $mensaje = array(
            'nombre' => $request->name,
            'email' => $request->email,
            'telefono' => $request->phone,
            'mensaje' => $request->mensaje
        );
        try {

            Mail::to('servicios@gpsgolden.cl')->send(new MySendEmail($mensaje));
            
            Alert::success('Solicitud enviada', 'Pronto nos pondremos en contacto');
            return redirect()->back();

        } catch (Throwable $e) {

            report($e);
            alert()->error('Error','Hubo un error en el proceso, por favor intentelo más tarde');
            return redirect()->back();
        }
    }
}
