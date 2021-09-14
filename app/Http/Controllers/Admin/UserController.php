<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('user.permissions');
        $this->middleware('isadmin');
    }//<--- Funcion que solo si es admin o tiene los permisos con lo cual me permite ver los controladores

    public function getUsers($status){
        if($status == 'all'):
            $users = User::orderBy('id', 'Desc')->paginate(30);
        else:
            $users = User::where('status', $status)->orderBy('id', 'Desc')->paginate(1);
        endif;    
        $data = ['users' => $users];
        return view('admin.users.home', $data);
    }

    public function getUserEdit($id){
        $u = User::findOrFail($id);
        $data = ['u' => $u];
        return view('admin.users.edit', $data);
             
    }

    public function getUserBanned($id){
        $u = User::findOrFail($id);
        if($u->status == "100"):
            $u->status = "1";
            $msg = "Usuario activado nuevamente.";
        else:
            $u->status = "100";
            $msg = "Usuario suspendido con éxito.";
        endif;            

        if($u->save()):
            return back()->with('message', $msg)->with('typealert', 'success');
        endif;           
    }

    public function getUserPermissions($id){
        $u = User::findOrFail($id);
        $data = ['u' => $u];
        return view('admin.users.permissions', $data);
    }
    
    public function postUserPermissions(Request $request, $id){
        $u = User::findOrFail($id);
        $permissions = [
            'dashboard' => $request->input('dashboard'),
            'dashboard_small_stats' => $request->input('dashboard_small_stats'),

            'galeria_view' => $request->input('galeria_view'),
            'galeria_new' => $request->input('galeria_new'),
            'galeria_add' => $request->input('galeria_add'),
            'galeria_delete' => $request->input('galeria_delete'),

            'faq' => $request->input('faq'),
            'faq_list' => $request->input('faq_list'),
            'faq_add' => $request->input('faq_add'),
            'faq_edit' => $request->input('faq_edit'),
            'faq_delete' => $request->input('faq_delete'),
            
            'user_list' => $request->input('user_list'),
            'edit' => $request->input('edit'),
            'banned' => $request->input('banned'),
            'delete' => $request->input('delete'),
            'permissions' => $request->input('permissions')
        ];
        $permissions = json_encode($permissions);
        $u->permissions = $permissions;

        if($u->save()):
            return back()->with('message', 'Los permisos del usuario han sido actualizados')->with('typealert', 'success');
        endif;    
    }

    public function postUserEdit(Request $request, $id){
        $u = User::findOrFail($id);
        $u->role = $request->input('user_type');
        
        if($request->input('user_type') == "1"):
            if(is_null($u->permissions)):
                $permissions = [
                    'dashboard' => true
                ];
                $permissions = json_encode($permissions);
                $u->permissions = $permissions;
            endif;
        else:
            $u->permissions = null;    
        endif;
        
        if($u->save()):
            if($request->input('user_type') == "1"):
                return redirect('/admin/user/'.$u->id.'/permissions')->with('message', 'El rango se ha actualizado')->with('typealert', 'success');
            else:
                return back()->with('message', 'El rango se ha actualizado')->with('typealert', 'success');
            endif;
        endif;
    }

    public function getUserDelete($id){
        $u = User::find($id);
        if($u->delete()):
            return back()->with('message', 'Usuario eliminado')->with('typealert', 'success');
        endif; 
    }
}
