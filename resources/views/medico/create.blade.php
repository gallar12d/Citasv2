@extends('admin.template.main4')

@section('title', '')

@section('content')


<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('medico.index') !!}">Medico Inicio</a>
<div class="clearfix"></div>

 <br>
<div class="panel panel-blue">
 <div class="panel-heading">Crear Medico</div>
   <div class="panel-body pan">

    {!! Form::open(['route' => 'medico.store', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal form-seperated form-row-stripped']) !!}

    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
      <div class="form-body">
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Nombres
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="Nombres" name="Nombres" type="text" placeholder="Nombres " class="form-control"/>
         </div>
        </div>
        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Apellidos
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="Apellidos" name="Apellidos" type="text" placeholder="Apellidos" class="form-control"/>
         </div>
        </div>

        <div class="form-group">
         <label for="inputFirstName" class="col-md-3 control-label">Identificacion
         <span class='require'>*</span>
         </label>
         <div class="col-md-4">
         <input id="Identificacion" name="Identificacion" type="text" placeholder="Identificacion" class="form-control"/>
         </div>
        </div>

        <div class="form-group">
                 <label for="inputFirstName" class="col-md-3 control-label">Departamento
                     <span class='require'>*</span>
                 </label>
                 <div class="col-md-4">
                  <select id="departamento" name="departamento" data-style="btn-primary" class="selectpicker form-control">
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
           <select id="municipio" class="btn dropdown-toggle selectpicker btn-info" name="municipio" required>
             <option selected value="">Seleccione Municipio</option>
             <option value="">""</option>
         </select>
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


@section('js')

<script src="{{ asset('js/municipios.js') }}"></script>

@endsection

@stop
