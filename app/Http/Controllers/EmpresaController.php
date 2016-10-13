<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Libraries\Repositories\EmpresaRepository;
use Mitul\Controller\AppBaseController as AppBaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Image;
use Flash;
use File;
use Session;

/**
 * Class EmpresaController
 *
 * @author  The scaffold-interface created at 2016-09-27 12:10:22am
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class EmpresaController extends Controller
{
    private $empresaRepository;
    function __construct(EmpresaRepository $empresaRepo)
   {
        $this->empresaRepository = $empresaRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empresas = Empresa::all();

/*        $TenanID = $this->tenanID();*/
        return view('empresa.index',compact('empresas'));
    }

protected function tenanID(Request $request)
{
   $prueba = $request->user()->name;
}
    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {

        return view('empresa.create'
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


        $empresa = new Empresa();
        $empresa->nombre = $input['nombre'];
        $empresa->direccion = $input['direccion'];
        $empresa->ruc = $input['ruc'];
        $empresa->correo = $input['correo'];
        $empresa->telefono = $input['telefono'];
        $empresa->image = $path;
        $empresa->save();
}
        return redirect('empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {

        $empresa = Empresa::findOrfail($id);
        return view('empresa.show',compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {


    $empresa = Empresa::findOrfail($id);
    return view('empresa.edit',compact('empresa'));

    }

    public function update(Request $request, $id)
    {

        $candidato = $this->empresaRepository->find($id);
        $imagen = Empresa::find($candidato->image);
        if(empty($candidato))
        {
            Flash::error('Candidato not found');

            return redirect(route('empresa.index'));
        }

        $data = $request->except('_token', 'image');

        if ($candidato->image) {
            $name = explode('/', $candidato->image);
            $name = end($name);

            if (File::exists('imagenes/'.$name))
                File::delete('imagenes/'.$name);

            if (File::exists('thumbnails/'.$name))
                File::delete('thumbnails/'.$name);
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
            $data['image'] = $path;

        }
        $candidato = $this->empresaRepository->updateRich($data, $id);

        Flash::success('Candidato updated successfully.');

        return redirect(route('empresa.index'));
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/empresa/'. $id . '/delete/');

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
     	$empresa = Empresa::findOrfail($id);
     	$empresa->delete();
        return URL::to('empresa');
    }

}
