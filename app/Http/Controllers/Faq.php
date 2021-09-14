<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
 //   use SoftDeletes;

    //protected $dates = ['deleted_at'];
    protected $table = 'faq';
    protected $hidden = ['created_at', 'updated_at'];

}
