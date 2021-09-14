<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Faq;

use Validator;

class FaqController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('user.permissions');
        $this->middleware('isadmin');
    }

    public function getHome(){
        $faq = Faq::orderBy('id')->paginate(15);
        $data =['faq' => $faq];
        return view('admin.faq.home', $data);
    }
    
    public function getFaqAdd(){
        return view('admin.faq.add');
    }

    public function postFaqAdd(Request $request){
        $rules = [
            'pregunta' => 'required',
            'respuesta' => 'required'
        ];

        $messages = [
            'pregunta.required' => 'La pregunta es obligatoria',
            'respuesta.required' => 'La respuesta es obligatoria'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
            if($validator->fails()):
                return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
            else:
                $faq = new Faq;
                $faq->pregunta = e($request->input('pregunta'));
                $faq->respuesta = e($request->input('respuesta'));
                
                if($faq->save()):
                    return redirect('/admin/faq')->with('message', 'Guardado con éxito,')->with('typealert', 'success');
                endif;    
            endif;    
    }

    public function getFaqEdit($id){
        $f = Faq::find($id);
        $data = ['f' => $f];
        return view('admin.faq.edit', $data);
    }

    public function postFaqEdit($id, Request $request){

        $rules = [
            'pregunta' => 'required',
            'respuesta' => 'required'
        ];

        $messages = [
            'pregunta.required' => 'La pregunta es obligatoria',
            'respuesta.required' => 'La respuesta es obligatoria'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
            if($validator->fails()):
                return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
            else:
                $faq = Faq::find($id);
                $faq->pregunta = e($request->input('pregunta'));
                $faq->respuesta = e($request->input('respuesta'));
                
                if($faq->save()):
                    return back()->with('message', 'Actualizado con éxito,')->with('typealert', 'success');
                endif;    
            endif;   
    }

    public function getFaqDelete($id){
        $f = Faq::find($id);
        if($f->delete()):
            return back()->with('message', 'Pregunta eliminada')->with('typealert', 'success');
        endif;    
    }

}
