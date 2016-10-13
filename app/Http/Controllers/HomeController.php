<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Entrust;
use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\User;

class HomeController extends Controller
{

	public function __construct()
	{

    $this->middleware('permission:ver-home', ['only' => 'index']);

    //$this->middleware('role:owner');
	/*$this->middleware('permission:ver-create', ['only' => 'create']);*/
    /*$this->middleware('permission:ver_index', ['only' => 'index']);*/
/*    $this->middleware('permission:crear-post', ['only' => ['index']]);*/
    /*$this->middleware('permission:ver-editar', ['only' => 'editar']);
    $this->middleware('permission:ver-create', ['only' => 'create']);
*/
	}


    public function index()
    {
    	$user = \Auth::user();
       	//$user->hasRole('owner');
       	//$user->can('edit-user');
        //Entrust::can('edit-user');
        //Auth

        return view('home');



    }
}
