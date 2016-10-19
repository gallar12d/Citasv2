<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Agendamiento;
use App\Agendadoctor;

class CalendarController extends Controller
{
    public function index(){
    $events = Agendamiento::all();
    $agenda = Agendadoctor::all();

    return view('fullcalendar.index', compact('events','agenda'));

}

public function agendamiento(){

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$color = $_POST['color'];

 Agendamiento::create([
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end'   => $end

         ]);

        return redirect('calendario');

}
    }

}
