<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function getHome(){
        $faq = Faq::orderBy('id')->paginate(30);
        $data =['faq' => $faq];
        return view('faq', $data);
    }
}
