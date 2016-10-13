@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
        <div class = 'container'>
            <h1>Crear Respuesta</h1>
            <form method = 'get' action = 'http://localhost:8000/respuesta'>
                <button class = 'btn btn-danger'>Respuesta Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/respuesta'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>



             <div class="input-group">
              <span class="input-group-addon"> Pregunta: </span>
               {!! Form::select('pregunta_id', $pregunta, null, ['class' => 'form-control', 'id' => 'pregunta_id']) !!}
                @if($errors->has('pregunta_id'))
               {!! Form::label('pregunta_id', $errors->first('pregunta_id'), array('class' => 'label label-primary')) !!}
                @endif
            </div>


                <div class="form-group">
                   <label for="descripcion">Descripción:</label>
                   <textarea class="ckeditor" name="descripcion" id="descripcion" rows="10" cols="80"></textarea>
               </div>


               <div class="input-group">
                 <label for="color">Elige la letra:</label>
               <br>
                 <input type="radio" name="letra" id="letra" value="a">A<br>
                 <input type="radio" name="letra" id="letra" value="b">B<br>
                 <input type="radio" name="letra" id="letra" value="c">C<br>
                 <input type="radio" name="letra" id="letra" value="d">D<br>
               </div>

                <div class="form-group">
                  <label for="color">Esta es la correcta:</label>
                <br>
                 <input type="radio" name="correcta" id="correcta" value="si">Si<br>
                 <input type="radio" name="correcta" id="correcta" value="no">No<br>
                </div>

                <button class = 'btn btn-primary form-control' type ='submit'>Crear</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection