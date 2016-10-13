@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
        <div class = 'container'>
            <h1>Edit Respuesta</h1>
            <form method = 'get' action = 'http://localhost:8000/respuesta'>
                <button class = 'btn btn-danger'>Respuesta Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/respuesta/{{$respuesta->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label for="pregunta_id">pregunta_id</label>
                    <input id="pregunta_id" name = "pregunta_id" type="text" class="form-control" value="{{$respuesta->pregunta_id}}">
                </div>

                <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <input id="descripcion" name = "descripcion" type="text" class="form-control" value="{{$respuesta->descripcion}}">
                </div>

                <div class="form-group">
                    <label for="letra">letra</label>
                    <input id="letra" name = "letra" type="text" class="form-control" value="{{$respuesta->letra}}">
                </div>

                <div class="form-group">
                    <label for="correcta">correcta</label>
                    <input id="correcta" name = "correcta" type="text" class="form-control" value="{{$respuesta->correcta}}">
                </div>


                <button class = 'btn btn-primary from-control' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection