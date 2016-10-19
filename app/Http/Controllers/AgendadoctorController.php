<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Agendadoctor;
use App\Agendamiento;
use App\Medico;

class AgendadoctorController extends Controller
{


public function index(){
    $medicos = Medico::all();
    $agenda = Agendadoctor::all();
    return view('agendadoctor.index', compact('medicos','agenda'));

}


public function creacion(Request $request){

  $data =($_POST['param1']);
  $data2 = ($_POST['param2']);

      Agendadoctor::create([
        'medico_id' => $data,
        'start' => $data2

      ]);
       return response()->json([
          "mensaje" => "creado"
        ]);



}



public function crearAgendamiento(Request $request){

  $data =($_POST['param1']);
  $data2 = ($_POST['param2']);

foreach ($data2 as $key => $value) {

      Agendadoctor::create([
        'medico_id' => $data,
        'start' => $value

      ]);
       return response()->json([
          "mensaje" => "creado"
        ]);
}


}

public   function obtenerHorario (Request $request){


$id =($_POST['id']);

//hacer consulta para q traiga los horarios no trabajados con este Id

//SELECT start FROM `agendadoctores` WHERE `medico_id` = 2
print_r (
      json_encode (

      $start = Agendadoctor::select('start')->where('medico_id', '=', $id)->get()

)
      );






}





}
