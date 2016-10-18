<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Agendadoctor;
use App\Medico;

class AgendadoctorController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('agendadoctor.index', compact('medicos'));
    }

public function create(Request $request)
{

    dd($request->medicos);

}

}
