  @extends('admin.template.main4')

  @section('title', 'Datos Medico')

  @section('content')


  <div class = 'container'>
   <div class="clearfix"></div>
   <br>

<div class="row">

  <div class="col-lg-12">

  <div class="panel panel-blue">

   <div class="panel-heading">Informacion Completa Medico</div>
    <div class="panel-body pan">
  <div class="clearfix"></div>


    <form action="#" class="form-horizontal">



    <div class="form-body pal">
     <a class="btn btn-info btn-flat" href="{!! route('medico.index') !!}"><i class="fa fa-home"></i> Medico Inicio</a>
 </div>

<div class="row">
  <div class="col-md-2">
  <div class="form-body pal">

    <img class="img-responsive" src="/{{ $medico->imagen }}">
  </div>
  </div>
  </div>
<div class="row">
  <div class="col-md-6">
  <div class="form-body pal">
<span class="label label-primary">Datos Basicos</span>
<div class="clearfix"></div>
<br>
  <div class="form-group">

  <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Nombres</span>
  </label>

    <div class="col-md-12">
     <p class="form-control-static">{{$medico->Nombres}}</p>
    </div>
 </div>

  <div class="form-group">
<label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Apellidos</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->Apellidos}}</p>
    </div>
 </div>

<div class="form-group">
<label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Identificación</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->Identificacion}}</p>
    </div>
 </div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Departamento</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->departamentos->nombre}}</p>
    </div>
 </div>

<div class="form-group">
<label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Municipio</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->municipios->nombre}}</p>
    </div>
 </div>

</div>
</div>

  <div class="col-md-6">
  <div class="form-body pal">
<span class="label label-primary">Datos Personales</span>
<div class="clearfix"></div>
<br>
<div class="form-group">
  <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Fecha Nacimiento</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->Fecha_nac}}</p>
    </div>
 </div>

<div class="form-group">
    <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Celular</span>
  </label>
  <div class="col-md-12">
     <p class="form-control-static">&nbsp;{{$medico->Celular}}</p>
    </div>
 </div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Email</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->email}}</p>
    </div>
 </div>


<div class="form-group">
  <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Especialidad</span>
  </label>
    <div class="col-md-12">
@foreach ($asignacion_medicos as $asig)
    <p class="form-control-static">{{$asig->especialidad}}</p>
@endforeach

    </div>
 </div>


<div class="form-group">
  <label for="inputFirstName" class="col-md-1 control-label">
    <span class="label label-success">Dirección</span>
  </label>
    <div class="col-md-12">
     <p class="form-control-static">{{$medico->Direccion}}</p>
    </div>
 </div>



    </div>
    </div>

</div>

    </div>
    </div>
    </div>
    </div>



@stop
