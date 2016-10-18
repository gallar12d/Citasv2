  @extends('admin.template.main4')

  @section('title', '')

  @section('content')


<div class = 'container'>
 <div class="clearfix"></div>
 <br>
<a class="btn btn-primary btn-flat" href="{!! route('medico.index') !!}"><i class="fa fa-home"></i> Medico Inicio</a>
<div class="clearfix"></div>
<br>
<div class="panel panel-blue">
 <div class="panel-heading">Crear Medico</div>
  <div class="panel-body pan">
  {!! Form::open(['route' => 'medico.store', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped','files' => true]) !!}
<input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
 <div class="form-body">
  <div class="form-group">
   <label for="inputFirstName" class="col-md-3 control-label">Nombres
    <span class='require'>*</span>
   </label>
  <div class="col-md-4">
   <input type="text" pattern="[A-Za-z]+" id="Nombres" name="Nombres" placeholder="Nombres " class="form-control solo_letras"  required/>
  </div>
</div>

<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Apellidos
  <span class='require'>*</span>
 </label>
 <div class="col-md-4">
  <input id="Apellidos" name="Apellidos" type="text" placeholder="Apellidos" class="form-control solo_letras"  required/>
 </div>
</div>

 <div class="form-group">
   <label for="inputFirstName" class="col-md-3 control-label">Identificacion
    <span class='require'>*</span>
   </label>
   <div class="col-md-4">
    <input type="number" id="Identificacion" name="Identificacion"  placeholder="Identificacion" class="form-control"  required/>
   </div>
 </div>

<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Departamento
  <span class='require'>*</span>
 </label>
 <div class="col-md-4">
  <select id="departamento" name="departamento" data-style="btn-primary" class="form-control">
   <option selected value="">Seleccione...</option>
    @foreach($departamentos as $dep)
     <option id="{{ $dep->id }}" value="{{ $dep->id }}">{{ $dep->nombre }}</option>
    @endforeach
  </select>
 </div>
</div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Municipio
   <span class='require'>*</span>
  </label>
  <div class="col-md-4">
   <select id="municipio" class="form-control" name="municipio" required>
    <option selected value="">Seleccione Municipio</option>
    <option value=""></option>
   </select>
  </div>
</div>


<div class="form-group">
 <label class="col-md-3 control-label">Fecha de Nacimiento</label>
  <div class="col-md-5">
   <input class="datepicker" data-date-format="dd/mm/yyyy" name="Fecha_nac"  required>
  </div>
</div>

<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Celular
  <span class='require'>*</span>
 </label>
 <div class="col-md-4">
  <input  type="number" id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control"  required/>
 </div>
</div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Email
   <span class='require'>*</span>
  </label>
   <div class="col-md-4">
     <input id="email" name="email" type="email" placeholder="Digite su Email" class="form-control"  required/>
   </div>
</div>

<div class="form-group">
 <label for="inputFirstName" class="col-md-3 control-label">Especialidades
   <span class='require'>*</span>
 </label>
  <div class="col-md-8">
  {!! Form::select('tags[]', $especialidades, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
  </div>
</div>

<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Dirección
  </label>
 <div class="col-md-4">
   <input id="Direccion" name="Direccion" type="text" placeholder="Dirección" class="form-control"/>
 </div>
</div>


<div class="form-group">
  <label for="inputFirstName" class="col-md-3 control-label">Imagen
  </label>
 <div class="col-md-4">
  {!! Form::file('image') !!}
 </div>
</div>


 <div class="form-actions text-right pal">
  <button type="submit" class="btn btn-success">Guardar&nbsp;<i class="fa fa-floppy-o"></i></button>
   &nbsp;
  </div>
  {!! Form::close() !!}
    </div>
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
