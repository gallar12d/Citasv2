<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Role;
use App\Permission;
use  Illuminate\Database\Query\Builder;
use  Laracasts\Flash\Flash;
use App\Http\Requests\RoleRequest;
use Session;
use Redirect;

class RoleController extends Controller
{

public function index(){

$role = Role::orderBy('id','ASC')->paginate(5);
$permiso = Permission::orderBy('id','ASC')->paginate(5);
return view('admin.roles.index')->with('role', $role)->with('permiso', $permiso);

	}

public function create()
{
$role = Role::orderBy('id','ASC')->paginate(2);
$permiso = Permission::orderBy('id','ASC')->paginate(2);
return view('admin.roles.create')->with('role', $role)->with('permiso', $permiso);
}


public function store(Request $request)
{

$role = new Role($request->all());
$role->save();
Flash::success("Se ha registrado "  . $role->name .  " de forma exitosa!");
return redirect()->route('admin.roles.index');

//if ($request->ajax()) {
//Role::create($request->All());
//$role = new Role($request->all());
//$role->save();


//	return response()->json([
//		"mensaje" => "creado"
//	]);
}

public function edit($id)
{

$role = Role::find($id);
return view('admin.roles.edit', ['role'=>$role]);

}
public function show(){

}


public function destroy($id)
{

Role::destroy($id);
Flash::success("Se eliminado de forma exitosa!");
return redirect()->route('admin.roles.index');

}



}
