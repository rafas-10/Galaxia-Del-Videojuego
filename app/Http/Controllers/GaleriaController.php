<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function getGaleria() {
        $images = Galeria::paginate(20);        
        return view('galeria', compact('images'));
    }
}
