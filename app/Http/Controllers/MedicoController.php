<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Medico;
use App\Departamento;
use App\Municipio;
use App\Especialidad;
use Carbon\Carbon;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class MedicoController
 *
 * @author  The scaffold-interface created at 2016-10-13 11:57:42pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();
        return view('medico.index',compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {

      $especialidades = Especialidad::all();
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

        $input = Request::except('_token');
        $medico = new Medico();
        $medico->Nombres = $input['Nombres'];
        $medico->Apellidos = $input['Apellidos'];
        $medico->Identificacion = $input['Identificacion'];
        $medico->Departamento_id = $input['departamento'];
        $medico->Municipio_id = $input['municipio'];
        $medico->Fecha_nac = Carbon::createFromFormat('d/m/Y',$input['Fecha_nac']);
        $medico->Celular = $input['Celular'];
        $medico->email = $input['email'];
        $array = $input['especialidad'];
        $cadena_equipo = implode(", ", $array);
      //  dd($cadena_equipo);
        $medico->especialidad = $cadena_equipo;
        $medico->Direccion = $input['Direccion'];
                        $medico->save();

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
        return view('medico.show',compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Request::ajax())
        {
            return URL::to('medico/'. $id . '/edit');
        }


        $medico = Medico::findOrfail($id);
        return view('medico.edit',compact('medico'
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
    public function update($id)
    {
        $input = Request::except('_token');

        $medico = Medico::findOrfail($id);

        $medico->Nombres = $input['Nombres'];

        $medico->Apellidos = $input['Apellidos'];

        $medico->Identificacion = $input['Identificacion'];

        $medico->Departamento_id = $input['Departamento_id'];

        $medico->Municipio_id = $input['Municipio_id'];

        $medico->Fecha_nac = $input['Fecha_nac'];

        $medico->Celular = $input['Celular'];

        $medico->email = $input['email'];

        $medico->Especialidad_id = $input['Especialidad_id'];

        $medico->Direccion = $input['Direccion'];


        $medico->save();

        return redirect('medico');
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
        return URL::to('medico');
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
