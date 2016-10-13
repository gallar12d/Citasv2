@extends('admin.template.main4')

@section('title', 'Editar Empresa')

@section('content')

<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('empresa.index') !!}">Empresa Home</a>
<div class="clearfix"></div>

 <br>
<div class="panel panel-blue">
 <div class="panel-heading">Editar Empresa</div>
   <div class="panel-body pan">

    {!! Form::model($empresa, ['route' => ['empresa.update', $empresa->id], 'method' => 'patch', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped']) !!}

    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
      <div class="form-body">
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Nombres
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="nombre" name="nombre" type="text" placeholder="Nombres" class="form-control" value="{{$empresa->nombre}}"/>
         </div>
        </div>
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Dirección
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="direccion" name="direccion" type="text" placeholder="Dirección Empresa" class="form-control" value="{{$empresa->direccion}}"/>
         </div>
        </div>
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Ruc
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="ruc" name="ruc" type="text" placeholder="Ruc" class="form-control" value="{{$empresa->ruc}}" />
         </div>
        </div>

        <div class="form-group">
        <label for="inputEmail" class="col-md-3 control-label">Correo
          <span class='require'>*</span></label>
           <div class="col-md-4">
            <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input type="email" name="correo" id="correo" placeholder="Correo Electronico"class="form-control" value="{{$empresa->correo}}"/>
            </div>
           </div>
          </div>


        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Telefono
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control" value="{{$empresa->telefono}}"/>
         </div>
        </div>


    <div class="clearfix"></div><br>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('image', 'Imagen', 'class', 'btn btn-default btn-file') !!}
            {!! Form::file('image') !!}
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
