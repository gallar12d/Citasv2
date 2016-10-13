<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use App\Departamento;
use App\Municipio;

class UsuarioController extends Controller
{

public function index($id = null){


    if ($id == null) {

        return Usuario::orderBy('id','asc')->get();

    }else{
        return $this->show($id);
    }
}
public function store(Request $request){


$file = $_FILES["file"]["name"];

if(!is_dir("files/"))
    mkdir("files/", 0777);

if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$file))
{
    echo $file;
}

    $usuario = new Usuario;
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->contact_number = $request->input('contact_number');
    $usuario->position = $request->input('position');
    $usuario->image = "files/".$file;
    $usuario->save();
    return redirect('empresa');


}

public function store2(Request $request){

 $data =($_POST['variable']);
dd($data);

 foreach ($data as $key => $value)
 {
 Usuario::create([
                'name' => $value['Nombre']
            ]);
       }
  }

public function show($id){

    return Usuario::find($id);

}

public function Obtener($id){

    print_r (
     json_encode (
        Usuario::find($id)
        )
     );
}


public function showdepto(){
    print_r (
     json_encode (
        $departamentos = Departamento::all()

        )
     );
}

public function showmunic(Request $request){
    print_r (
     json_encode (
    $municipios = Municipio::select('Municipios.nombre')->join(
    'Departamentos',
    'Departamentos.id', '=', 'Municipios.departamento_id')
    ->where('Municipios.departamento_id', '=', $request['variable'])->get()
        )
     );
}
public function update(Request $request, $id)
{


$file = $_FILES["file"]["name"];

if(!is_dir("files/"))
    mkdir("files/", 0777);

if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$file))
{
    echo $file;
}

    $usuario = Usuario::find($id);
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->contact_number = $request->input('contact_number');
    $usuario->position = $request->input('position');
    $usuario->image = "files/".$file;
    $usuario->save();
    return 'actualizado el usuario'. $usuario->id;

}

public function destroy($id){
    $usuario=Usuario::findOrFail($id);
    $usuario->delete();
    return response()->json(["mensaje"=>"borrado"]);
  }
}








