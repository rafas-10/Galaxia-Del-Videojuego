<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'title',
        'image',
    ];


}
