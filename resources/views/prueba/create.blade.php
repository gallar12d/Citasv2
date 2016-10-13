@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
      @parent
        <div class = 'container'>
            <h1>Crear Prueba</h1>
            <form method = 'get' action = 'http://localhost:8000/prueba'>
                <button class = 'btn btn-danger'>Prueba Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/prueba'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label for="nombre">nombre</label>
                    <input id="nombre" name = "nombre" type="text" class="form-control">
                </div>


                <button class = 'btn btn-primary form-control' type ='submit'>Crear</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection