<?php
 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
 
use App\Http\Traits\UploadTrait;
use App\Galeria;



class GaleriaController extends Controller
{

    use UploadTrait;

    public function __Construct(){
        $this->middleware('auth');
        //$this->middleware('user.permissions');
        $this->middleware('isadmin');
    }
 
    public function getGaleria() {
        $images = Galeria::paginate(20);        
        return view('admin.galeria.home', compact('images'));
    }

    public function getNew(){
        return view('admin.galeria.new');
    }

    public function postAdd(Request $request){
        $newImage = new Galeria;

        $newImage->title = $request->input('title');
        
        $image = $request->file('image');
        $name = Str::slug($request->input('title')).'_'.time();   
        $folder = '/uploads/images/';
        $filepath = $folder.$name. '.' .$image->getClientOriginalExtension();
        $this->uploadOne($image, $folder, 'public', $name);
        $newImage->image = $filepath;

        $newImage->save();

        return redirect('/galeria')->with(['message' => 'Se ha añadido la imagen correctamente']);
    }

    public function getDelete($id){
        $image = Galeria::find($id);
        if($image->delete()):
            return back()->with('message', 'Imágen eliminada')->with('typealert', 'success');
        endif;    
    }


}
