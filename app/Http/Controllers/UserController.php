<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use  Illuminate\Database\Query\Builder;
use  Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;
use Session;
use Redirect;

class UserController extends Controller
{

    public function __construct()
    {

    }


    public function index(Request $request)
    {

        $users = User::search($request->name)->orderBy('id', 'ASC')->paginate(2);

        return view('admin.users.index')->with('users', $users);
    }

public function create()
{
    return view('admin.users.create');
    
}

public function store(Request $request)
{


$user = new User($request->all());
$user->password = bcrypt($request->password);
$user->save();

Flash::success("Se ha registrado "  . $user->name .  " de forma exitosa!");
return redirect()->route('admin.users.index');

}

public function edit($id){

    $user = User::find($id);
    return view('admin.users.edit')->with('user', $user);
}

public function update(Request $request, $id)
{

    $user = User::find($id);
    //$user->fill($request->all());
    $user->name  = $request->name;
    $user->email = $request->email;
    $user->type  = $request->type;

    //$user_new = new User($request->all());
    $user->save();

    Flash::success("Se ha editado " . $user->name . " de forma exitosa!");
    return redirect()->route('admin.users.index');


}

public function destroy($id)
{

$user = User::find($id);
$user->delete();

Flash::warning('el usuario ' . $user->name . ' a sido eliminado de forma correcta');
return redirect()->route('admin.users.index');

}

public function iflogin(){

    $respuesta = Auth::guest();
    return $respuesta;
    echo $respuesta;
}


}
