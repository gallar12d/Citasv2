@extends('admin.template.main4')

@section('title', '')

@section('content')


<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('especialidades.index') !!}">Especialidades Inicio</a>
<div class="clearfix"></div>

 <br>
<div class="panel panel-blue">
 <div class="panel-heading">Crear Especialidad</div>
   <div class="panel-body pan">

    {!! Form::open(['route' => 'especialidades.store', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped']) !!}

    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
      <div class="form-body">
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Nombre de Especialidad
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="nombre" name="nombre" type="text" placeholder="Nombre Especialidad" class="form-control"/>
         </div>
        </div>
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Descripcion de la Especialidad
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
           <textarea id="descripcion" name="descripcion"  placeholder="Descripción Especialidad" class="form-control" rows="5" id="comment"></textarea>
         
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
