@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')

        <div class = 'container'>
            <h1>Crear Pregunta</h1>
            <form method = 'get' action = 'http://localhost:8000/pregunta'>
                <button class = 'btn btn-danger'>Pregunta Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/pregunta'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>


         <div class="input-group">
          <span class="input-group-addon"> Prueba: </span>
             {!! Form::select('prueba_id', $prueba, null, ['class' => 'form-control', 'id' => 'prueba_id']) !!}

         @if($errors->has('prueba_id'))
            {!! Form::label('prueba_id', $errors->first('prueba_id'), array('class' => 'label label-primary')) !!}
         @endif
         </div>


         <div class="form-group">
            <label for="description">Descripción:</label>
               <textarea class="ckeditor" name="descripcion" id="descripcion" rows="10" cols="80"></textarea>
          </div>


                <button class = 'btn btn-primary form-control' type ='submit'>Crear</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection