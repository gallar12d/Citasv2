@extends('admin.template.main4')

@section('title', 'Agendamiento')

@section('content')

<div class="container">
<div class="clearfix"></div>
<br>
<br>

<div class="form-group">
 <label for="inputFirstName" class="col-md-1 control-label">Medicos
  <span class='require'>*</span>
 </label>
 <div class="col-md-4">
  <select id="medicos" name="medicos" data-style="btn-primary" class="form-control">
   <option selected value="">Seleccione...</option>
    @foreach($medicos as $medic)
     <option id="{{ $medic->id }}" value="{{ $medic->id }}">{{ $medic->Nombres }}</option>
    @endforeach
  </select>
 </div>
</div>
</div>
<script type="text/javascript" src="{{ asset('demo2/js/jquery.latest.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('demo2/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('demo2/js/prism.min.js') }}"></script>
    <script src='{{ asset('lib/moment.min.js') }}'></script>
    <script type="text/javascript" src="{{ asset('src2/js/pignose.calendar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js2/agenda.js') }}"></script>

       <div class = 'container'>

        <div class="header">

        <div class="article">

          @foreach($agenda as $ag)
            <h1>{{$ag->start}}</h1>
           <!-- <option id="{{ $medic->id }}" value="{{ $medic->id }}">{{ $medic->Nombres }}</option> -->
          @endforeach

            <h3>Calendario Agendamiento</h3>
            <h4>Elija Dias No Trabajados.</h4>
            <div class="toggle-calendar"></div>
            <div class="box"></div>
        </div>

        </div>
    </div>

 <div class="form-actions text-left pal">
  <button id="guardarAgenda" type="submit" class="btn btn-success" onclick="guardar()">Guardar&nbsp;<i class="fa fa-floppy-o"></i></button>
   &nbsp;
  </div>






@stop
