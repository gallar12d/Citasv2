@extends('admin.template.main4')

@section('title', 'Editar Especialidad')

@section('content')

<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('especialidades.index') !!}">especialidades Index</a>
<div class="clearfix"></div>

 <br>
<div class="panel panel-blue">
 <div class="panel-heading">Editar Especialidad</div>
   <div class="panel-body pan">

    {!! Form::model($especialidades, ['route' => ['especialidades.update', $especialidades->id], 'method' => 'patch', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped']) !!}

    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
      <div class="form-body">
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Nombre Especialidad
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" value="{{$especialidades->nombre}}"/>
         </div>
        </div>
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Descripcion
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
            <textarea id="descripcion" name="descripcion"  class="form-control" rows="5" id="comment">{{$especialidades->descripcion}}</textarea>

         </div>
        </div>


    <div class="form-actions text-right pal">
    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                        &nbsp;
                                                 </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>




@stop
