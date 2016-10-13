@extends('admin.template.main4')

@section('title', 'Lista de usuarios')

@section('content')
      @parent

<link rel="stylesheet" href="{{ asset('css/multi-select.css') }}">


     <style>
            .user{
                margin-top: 60px;
            }
        </style>

        @include('admin.roles.gestionarpermisos')
        @include('admin.roles.crearroles')


   <div id="page-content">
     <div class="block">
        <div class="block-title">
        </div>

<div class="clearfix"></div>
<br>
     <div class="container">
          <td><a data-toggle="modal"  data-target="#crear_roles" class="btn btn-blue btn-square">Crear Rol</a></td>


     </div>

<div class="page-content">
                <div class="row">
                    <div class="col-lg-12">


<div class="panel panel-blue">
<div class="panel-heading">Usuarios</div>
<div class="panel-body">
    <div id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
          <thead class="cf">
            <tr>
              <th>Nombre</th>
              <th>Permisos</th>
              <th style="width: 150px;" class="text-center">Acciones</th>
            </tr>
          </thead>
            <tbody>
             <tr>
              @foreach($role as $rol)
              <td><a href="javascript:void(0)" class="label label-warning">{{ $rol->name }}</a></td>
              <td><a data-toggle="modal" rol_id="{{ $rol->id }}" data-target="#permisos" class="btn btn-success get-permisos">Permisos</a></td>
              <td class="text-center">
                {!! Form::open(['route'=>['admin.roles.destroy', $rol->id],'method'=>'DELETE']) !!}
                     <div class="btn-group btn-group-xs">
               <!-- <a href="{!! route('admin.roles.edit', $rol->id) !!}"  title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>-->
                    <button  onclick="return confirm('¿Seguro quiere borrar este Asistente?')" data-toggle="tooltip" title="Delete" class="btn btn-danger" type="submit">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                {!! Form::close() !!}
                </td>
               </tr>
               @endforeach
            </tbody>                        </table>
                                </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


         </div>
       </div>

@stop