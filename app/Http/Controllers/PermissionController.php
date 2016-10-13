<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Permission;
use App\Role;
use App\RolesPermission;
use Illuminate\Database\Query\Builder;
use Laracasts\Flash\Flash;
use App\Http\Requests\PermissionRequest;
use Session;
use Redirect;
use Input;
use Response;
use DB;


class PermissionController extends Controller
{

	 protected $permisos;
    
    public function  __construct() {
		$permisos = Permission::all();
		$this->permisos = $permisos;
	}
    
 
 public function getIndex(){

$permiso = Permission::orderBy('id','ASC')->paginate(2);

return view('admin.permisos.index')->with('permiso', $permiso);

	}
    
public function getCreate()
{

$permiso = Permission::orderBy('id','ASC')->paginate(2);
	
	return view('admin.roles.create')->with('permiso', $permiso);
}


public function postStore(Request $request)
{

$permiso = new Permission($request->all());
$permiso->save();
Flash::success("Se ha registrado "  . $permiso->name .  " de forma exitosa!");
return redirect()->route('admin.users.create');

}
	public function getPermisos(Request $request){
        $permisos['permisosAsignados'] = $permisosDeRol = RolesPermission::where('role_id', $request->id)->get();
        return response()->json($permisos);
        
    }

 public function getAsignar(){
		

$rol = Role::find(Input::get('role_id'));
$rol->attachPermission(Input::get('permission_id'));
$rol->save();
return Response::json('ok');

	}

 public function getDesasignar(Request $request){
		

	$rol = Role::find(Input::get('role_id'));
	$rolPermisos = DB::table('permission_role')->where('role_id', $request->role_id)->where('permission_id', $request->permission_id)->delete();
	

    

	return Response::json('eliminado');
}

   

}
