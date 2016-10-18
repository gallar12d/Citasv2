<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Libraries\Repositories\MedicoRepository;
use App\Medico;
use App\Departamento;
use App\Municipio;
use App\Especialidad;
use App\MedicoEspecialidad;
use App\Image;
use Storage;
use File;
use Carbon\Carbon;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Http\Request;
use URL;

/**
 * Class MedicoController
 *
 * @author  The scaffold-interface created at 2016-10-13 11:57:42pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class MedicoController extends Controller
{

private $medicoRepository;
    function __construct(MedicoRepository $medicoRepo)
   {
        $this->medicoRepository = $medicoRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {

     $medicos = Medico::all();




  return view('medico.index',compact('medicos','municipios'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {

      $especialidades = Especialidad::lists('nombre','id');
      $departamentos = Departamento::all();
      return view('medico.create', compact('departamentos', 'especialidades')
                );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    $input = $request->except('_token', 'image');
            if ($file = $request->file('image')) {
            $image = \Image::make(\Input::file('image'));
            $nombre = str_random(30).'.'.$file->getClientOriginalExtension();
            //Ruta donde queremos guardar las imagenes
            $path1 = public_path().'/thumbnails/';
            $path2 = public_path().'/imagenes/';
            // Guardar Original
            $image->resize(480,400);
            $image->save($path2.$nombre);
            // Cambiar de tamaño
            $image->resize(240,200);
            // Guardar
            $image->save($path1.$nombre);
            //Guardamos nombre y nombreOriginal en la BD
            $path = 'thumbnails/';
            $path .= $nombre;
            $input['image'] = $path;

        $medico = new Medico();
        $medico->Nombres = $request->Nombres;
        $medico->Apellidos = $request->Apellidos;
        $medico->Identificacion = $request->Identificacion;
        $medico->Departamento_id = $request->departamento;
        $medico->Municipio_id = $request->municipio;
        $medico->Fecha_nac = Carbon::createFromFormat('d/m/Y',$request->Fecha_nac);
        $medico->Celular = $request->Celular;
        $medico->email = $request->email;
        $medico->imagen = $path;
        $array = $request->tags;
        $medico->Direccion = $request->Direccion;
        $medico->save();
        $medico->tags()->sync($array);
}

        return redirect('medico');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
public function show($id)
 {

$medico = Medico::findOrfail($id);
$medicoss = MedicoEspecialidad::distinct()->select('Medicos.Nombres as nombre', 'Especialidades.nombre as especialidad', 'Medicos.id as medico')
->join(
    'Medicos',
    'Medicos.id', '=', 'medico_especialidad.medico_id')->
join(
    'Especialidades',
    'Especialidades.id', '=', 'medico_especialidad.especialidad_id'
    )->where('medico_especialidad.medico_id','=', $medico->id)->get();

$asignacion_medicos = [];
foreach ($medicoss as $medic) {
        $med = MedicoEspecialidad::select('Medicos.Nombres as nombre', 'Especialidades.nombre as especialidad', 'Medicos.id as medico')
->join(
    'Medicos',
    'Medicos.id', '=', 'medico_especialidad.medico_id')->
join(
    'Especialidades',
    'Especialidades.id', '=', 'medico_especialidad.especialidad_id'
    )->where('medico_especialidad.medico_id', $medic->medico)->get();
        $asignacion_medicos = $med;
    }
     return view('medico.show',compact('medico','medicos','asignacion_medicos','medicoss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $departamentos = Departamento::lists('nombre', 'id');
        $municipios = Municipio::lists('nombre', 'id');
        $medico = Medico::findOrfail($id);
        $especialidades = Especialidad::orderBy('nombre','DESC')->lists('nombre','id');

        $my_especialidades = $medico->tags->lists('id')->ToArray();

        return view('medico.edit',compact('medico', 'departamentos', 'especialidades','municipios','my_especialidades'
                )
                );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {

            if ($file = $request->file('image')) {
            $image = \Image::make(\Input::file('image'));
            $nombre = str_random(30).'.'.$file->getClientOriginalExtension();
            //Ruta donde queremos guardar las imagenes
            $path1 = public_path().'/thumbnails/';
            $path2 = public_path().'/imagenes/';
            // Guardar Original
            $image->resize(480,400);
            $image->save($path2.$nombre);
            // Cambiar de tamaño
            $image->resize(240,200);
            // Guardar
            $image->save($path1.$nombre);
            //Guardamos nombre y nombreOriginal en la BD
            $path = 'thumbnails/';
            $path .= $nombre;
            $input['image'] = $path;

        $input = $request->except('_token');
        $medico = Medico::findOrfail($id);
        $medico->Nombres = $request->Nombres;
        $medico->Apellidos = $request->Apellidos;
        $medico->Identificacion = $request->Identificacion;
        $medico->Departamento_id = $request->Departamento_id;
        $medico->Municipio_id = $request->municipio;
        $medico->Celular = $request->Celular;
        $medico->email = $request->email;
        $medico->Direccion = $request->Direccion;
        $medico->Fecha_nac = Carbon::createFromFormat('d/m/Y',$request->Fecha_nac);
        $array = $request->tags;
        $medico->Direccion = $request->Direccion;
        $medico->save();
        $medico->tags()->sync($array);
}
        return redirect('medico');
    }*/



    public function update(Request $request, $id)
    {

        $input = $request->except('_token', 'image');
        $medico = Medico::findOrfail($id)->fill($request->all());
        $imagen = Medico::find($medico->imagen);

        if(empty($medico))
        {
            Flash::error('medico not found');

            return redirect(route('medico.index'));
        }

        $data = $request->except('_token', 'image');

        if ($medico->imagen) {
            $name = explode('/', $medico->imagen);
            $name = end($name);

            if (File::exists('imagenes/'.$name))
                File::delete('imagenes/'.$name);

            if (File::exists('thumbnails/'.$name));

        }

        if ($file = $request->file('image')) {
            $image = \Image::make(\Input::file('image'));
            $nombre = str_random(20).'.'.$file->getClientOriginalExtension();
            //Ruta donde queremos guardar las imagenes
            $path1 = public_path().'/thumbnails/';
            $path2 = public_path().'/imagenes/';
            // Guardar Original
            $image->resize(400,400);
            $image->save($path2.$nombre);
            // Cambiar de tamaño
            $image->resize(200,200);
            // Guardar
            $image->save($path1.$nombre);
            //Guardamos nombre y nombreOriginal en la BD
            $path = 'thumbnails/';
            $path .= $nombre;
            $data['imagen'] = $path;
            $medico->imagen = $path;


        }
            $imagenes = $medico->imagen;


        $medico->Nombres = $request->Nombres;
        $medico->Apellidos = $request->Apellidos;
        $medico->Identificacion = $request->Identificacion;
        $medico->Departamento_id = $request->Departamento_id;
        $medico->Municipio_id = $request->municipio;
        $medico->Celular = $request->Celular;
        $medico->email = $request->email;
        $medico->Direccion = $request->Direccion;
        $medico->Fecha_nac = Carbon::createFromFormat('Y-m-d',$request->Fecha_nac);
        $medico->imagen = $imagenes;
        $array = $request->tags;
        $medico->Direccion = $request->Direccion;
        $medico->save();
        $medico->tags()->sync($array);
        return redirect(route('medico.index'));
    }
  /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     *
     * @return  String
     */
    public function DeleteMsg($id)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/medico/'. $id . '/delete/');

        if(Request::ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$medico = Medico::findOrfail($id);
        $medico->delete();
        return redirect(route('medico.index'));
    }

public function showmunic()
{

  $data =($_POST['variable']);

  print_r (
      json_encode (
     $municipios = Municipio::select('Municipios.nombre', 'Municipios.id')->join(
     'Departamentos',
     'Departamentos.id', '=', 'Municipios.departamento_id')
     ->where('Municipios.departamento_id', '=',   $data)->get()
         )
      );


}

}
