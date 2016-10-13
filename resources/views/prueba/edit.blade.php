@extends('admin.template.main3')
@section('title', 'Lista de usuarios')
@section('content')
      @parent
        <div class = 'container'>
            <h1>Editar Prueba</h1>
            <form method = 'get' action = 'http://localhost:8000/prueba'>
                <button class = 'btn btn-danger'>Prueba Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/prueba/{{$prueba->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label for="nombre">nombre</label>
                    <input id="nombre" name = "nombre" type="text" class="form-control" value="{{$prueba->nombre}}">
                </div>


                <button class = 'btn btn-primary from-control' type ='submit'>Actualizar</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection