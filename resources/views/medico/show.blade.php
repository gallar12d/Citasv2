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
    <form action="#" class="form-horizontal">

<div class="row">
  <div class="col-md-6">
  <div class="form-body pal">
<span class="label label-primary">Datos Basicos</span>
<div class="clearfix"></div>
<br>
  <div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Nombres:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->Nombres}}</p>
    </div>
 </div>

  <div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Apellidos:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->Apellidos}}</p>
    </div>
 </div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Identificación:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->Identificacion}}</p>
    </div>
 </div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Departamento:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->departamentos->nombre}}</p>
    </div>
 </div>


<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Municipio:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->municipios->nombre}}</p>
    </div>
 </div>

</div>
</div>

  <div class="col-md-6">
  <div class="form-body pal">
<span class="label label-success">Datos Personales</span>
<div class="clearfix"></div>
<br>
<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Nacimiento:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->Fecha_nac}}</p>
    </div>
 </div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Celular:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->Celular}}</p>
    </div>
 </div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Email:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->email}}</p>
    </div>
 </div>


<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Especialidad:</label>
    <div class="col-md-9">
     <p class="form-control-static">{{$medico->especialidad}}</p>
    </div>
 </div>


<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Dirección:</label>
    <div class="col-md-9">
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
