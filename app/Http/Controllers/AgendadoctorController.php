<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Agendadoctor;

class AgendadoctorController extends Controller
{
    public function index()
    {

        return view('agendadoctor.index');
    }
}
