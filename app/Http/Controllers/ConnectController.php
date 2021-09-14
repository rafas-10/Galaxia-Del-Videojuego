<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, hash, Auth;
use App\User;

class ConnectController extends Controller
{
    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];

    $messages = [
        'email.required' => 'Necesito tu correo.',
        'email.email' => 'El formato de tu correo no es valido.',
        'password.required' => 'Escribe una contraseña porfavor',
        'password.min' => 'En tu contraseña deben de haber minimo 8 caracteres',
    ];
    
    $validator = Validator::make($request->all(), $rules, $messages);
    if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
    else:

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
            if(Auth::user()->status == "100"):
                return redirect('/logout');
            else:
                return redirect('/');
            endif;    
        else: 
            return back()->with('message', 'Correo electrónico o contraseña errónea')->with('typealert', 'danger');
        endif;        
    endif;    
    }

    public function getLogout(){
        $status = Auth::user()->status;
        Auth::logout();
        if($status == "100"):
            //Auth::user()->status = "100"):
            return redirect('/login')->with('message', 'El usuario esta suspendido')->with('typealert', 'danger');
        else:
            return redirect('/');
        endif;
    }
}
