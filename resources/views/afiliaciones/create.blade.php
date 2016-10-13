@extends('admin.template.main4')

@section('title', '')

@section('content')


<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('afiliaciones.index') !!}">Afiliaciones Inicio</a>
<div class="clearfix"></div>

 <br>
<div class="panel panel-blue">
 <div class="panel-heading">Crear Afiliacion</div>
   <div class="panel-body pan">

    {!! Form::open(['route' => 'afiliaciones.store', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped']) !!}

    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
      <div class="form-body">
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Codigo Empresa
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="codigo_empresa" name="codigo_empresa" type="text" placeholder="Codigo Empresa" class="form-control"/>
         </div>
        </div>
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Nombre Empresa
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="nombre" name="nombre" type="text" placeholder="nombre" class="form-control"/>
         </div>
        </div>


    <div class="form-actions text-right pal">
    <button type="submit" class="btn btn-primary">Guardar</button>
                                                   &nbsp;
                                                 </div>
      {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>



@stop