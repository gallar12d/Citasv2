<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AlumnoController
 *
 * @author  The scaffold-interface created at 2016-05-03 04:39:56pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('alumno.create'
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

        $alumno = new Alumno();

        
        $alumno->nombre = $input['nombre'];

        
        $alumno->apellidos = $input['apellidos'];

        
        
        $alumno->save();

        return redirect('alumno');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::ajax())
        {
            return URL::to('alumno/'.$id);
        }

        $alumno = Alumno::findOrfail($id);
        return view('alumno.show',compact('alumno'));
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
            return URL::to('alumno/'. $id . '/edit');
        }

        
        $alumno = Alumno::findOrfail($id);
        return view('alumno.edit',compact('alumno'
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

        $alumno = Alumno::findOrfail($id);
    	
        $alumno->nombre = $input['nombre'];
        
        $alumno->apellidos = $input['apellidos'];
        
        
        $alumno->save();

        return redirect('alumno');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/alumno/'. $id . '/delete/');

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
     	$alumno = Alumno::findOrfail($id);
     	$alumno->delete();
        return URL::to('alumno');
    }

}
