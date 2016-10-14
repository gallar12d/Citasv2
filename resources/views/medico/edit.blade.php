@extends('admin.template.main4')

@section('title', 'Editar Especialidad')

@section('content')

<div class = 'container'>
 <div class="clearfix"></div>
  <br>

<a class="btn btn-primary btn-flat" href="{!! route('especialidades.index') !!}">medico Index</a>
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
                          <select id="departamento" name="Departamento_id" data-style="btn-primary" class="form-control">
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
                        <select id="municipio" class="form-control" name="Municipio_id" required>
                          <option selected value="">Seleccione Municipio</option>
                          <option value=""></option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                      <label class="col-md-3 control-label">Fecha de Nacimiento</label>
                      <div class="col-md-5">
                         <input value="Escoja" class="datepicker" data-date-format="dd/mm/yyyy" name="Fecha_nac"  required>
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
                                     <label for="inputFirstName" class="col-md-3 control-label">Especialidad
                                         <span class='require'>*</span>
                                     </label>
                                     <div class="col-md-4">
                                      <select   value="algo" id="especialidad" name="especialidad[]" data-style="btn-primary" class="form-control selectpicker " multiple data-max-options="5"  required>

                                          @foreach($especialidades as $esp)
                                          <option  value="{{ $esp->nombre }}">{{ $esp->nombre }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>

                              <div class="form-group">
                               <label for="inputFirstName" class="col-md-3 control-label">Dirección

                               </label>
                               <div class="col-md-4">
                               <input value="{{$medico->Direccion}}" id="Direccion" name="Direccion" type="text" placeholder="Dirección" class="form-control"/>
                               </div>
                              </div>





    <button class = 'btn btn-primary from-control' type ='submit'>Update</button>


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

                                @endsection


@stop
