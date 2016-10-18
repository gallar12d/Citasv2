@extends('admin.template.main4')

@section('title', 'Editar Medico')

@section('content')

<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('medico.index') !!}"><i class="fa fa-home"></i> medico Index</a>
<div class="clearfix"></div>

 <br>
<div class="panel panel-blue">
 <div class="panel-heading">Editar medico</div>
   <div class="panel-body pan">

    {!! Form::model($medico, ['route' => ['medico.update', $medico->id], 'method' => 'patch', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped']) !!}

    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
    <div class="form-body">
      <div class="form-group">
       <label for="inputFirstName" class="col-md-3 control-label">Nombres
       <span class='require'>*</span>
       </label>
       <div class="col-md-4">
       <input id="nombre" name="Nombres" type="text" placeholder="Nombre" class="form-control" value="{{$medico->Nombres}}"/>
       </div>
      </div>
      <div class="form-group">
       <label for="inputFirstName" class="col-md-3 control-label">Apellidos
       <span class='require'>*</span>
       </label>
       <div class="col-md-4">
       <input id="Apellidos" name="Apellidos" type="text" placeholder="Apellidos" class="form-control" value="{{$medico->Apellidos}}"/>
       </div>
      </div>
      <div class="form-group">
       <label for="inputFirstName" class="col-md-3 control-label">identificacion
       <span class='require'>*</span>
       </label>
       <div class="col-md-4">
       <input  value ="{{ $medico->Identificacion }}"id="identificacion" name="Identificacion" type="text" placeholder="identificacion" class="form-control" value="{{$medico->identificacion}}"/>
       </div>
      </div>



      <div class="form-group">
       <label for="inputFirstName" class="col-md-3 control-label">Departamento
          <span class='require'>*</span>
         </label>
      <div class="col-md-4">
      {!! Form::select('departamento_id', $departamentos, null, ['class' => 'form-control', 'id' => 'departamento', 'name' => 'Departamento_id', 'data-value' => old('departamento_id')]) !!}
        </div>
     </div>


<div class="form-group">
       <label for="inputFirstName" class="col-md-3 control-label">Municipio
          <span class='require'>*</span>
         </label>
      <div class="col-md-4">
      {!! Form::select('municipio', $municipios, $medico->municipios->id, ['class' => 'form-control', 'id' => 'municipio', 'name' => 'municipio', 'data-value' => old('municipio')]) !!}
        </div>
     </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Fecha de Nacimiento</label>
           <div class="col-md-5">
                <input value="{{ $medico->Fecha_nac }}" class="datepicker" data-date-format="dd/mm/yyyy" name="Fecha_nac"  required>
           </div>
    </div>
    <div class="form-group">
       <label for="inputFirstName" class="col-md-3 control-label">Celular
        <span class='require'>*</span>
       </label>
         <div class="col-md-4">
          <input value="{{ $medico->Celular }}" type="number" id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control"  required/>
       </div>
    </div>

<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Email
  <span class='require'>*</span>
 </label>
 <div class="col-md-4">
  <input value ="{{ $medico->email }}" id="email" name="email" type="email" placeholder="Digite su Email" class="form-control"  required/>
 </div>
</div>


<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Especialidades
   <span class='require'>*</span>
 </label>
  <div class="col-md-8">
  {!! Form::select('tags[]', $especialidades, $my_especialidades, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
  </div>
</div>

<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Dirección
 </label>
 <div class="col-md-4">
  <input value="{{$medico->Direccion}}" id="Direccion" name="Direccion" type="text" placeholder="Dirección" class="form-control"/>
 </div>
</div>


<div class="form-group">
<div class="row">
  <div class="col-md-1">
    <img class="img-responsive" src="/{{ $medico->imagen }}">
  </div>
  <div class="col-md-11">
    {!! Form::label('imagen','Imagen') !!}
    {!! Form::file('image') !!}
  </div>
</div>
  </div>
  </div>



 <div class="form-actions text-right pal">
  <button type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fa fa-floppy-o"></i></button>
   &nbsp;
  </div>
  {!! Form::close() !!}
    </div>
   </div>
  </div>

 @section('js')

<script src="{{ asset('js/municipios.js') }}"></script>
<script type="text/javascript">
  $.fn.datepicker.defaults.format = "mm/dd/yyyy";
  $('.datepicker').datepicker({
    startDate: '-3d'
  });
</script>
<script>
  $('.select-tag').chosen({
    placeholder_text_multiple: 'Seleccione Especialidades'
  });
</script>


@endsection


@stop
