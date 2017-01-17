<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Afiliacion;
use Amranidev\Ajaxis\Ajaxis;


class AfiliacionController extends Controller
{

     public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(){

        $afiliaciones = Afiliacion::all();
        return view('afiliaciones.index',compact('afiliaciones'));
    }


    public function create(){

    return view('afiliaciones.create'

    );

    }

public function store(Request $request){

            $afiliaciones = Afiliacion::create([
            'codigo_empresa' => $request->codigo_empresa,
            'nombre' => $request->nombre
        ]);
        return redirect('afiliaciones');
  }


public function crearvarios(){

     $data =($_POST['variable']);


 foreach ($data as $key => $value)
 {
 Afiliacion::create([
                'codigo_empresa' => $value['Codigo'],
                'nombre' => $value['Nombre']

            ]);
       return response()->json([
          "mensaje" => "creado"
        ]);
       }

        /*print_r( json_encode( true ) );*/

}


public function edit($id){

    $afiliacion = Afiliacion::findOrfail($id);
    return view('afiliaciones.editar',compact('afiliacion'));


}

public function update(Request $request, $id){

    $afiliaciones = Afiliacion::find($id);
    $afiliaciones->codigo_empresa = $request->input('codigo_empresa');
    $afiliaciones->nombre = $request->input('nombre');
    $afiliaciones->save();
    return redirect('afiliaciones');


}


    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $afiliaciones = Afiliacion::findOrfail($id);
        $afiliaciones->delete();
        return redirect('afiliaciones');
    }

}
