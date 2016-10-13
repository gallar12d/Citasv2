<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Alumno</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Alumno</h1>
            <form method = 'get' action = 'http://localhost:8000/alumno'>
                <button class = 'btn btn-danger'>Alumno Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/alumno/{{$alumno->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombre">nombre</label>
                    <input id="nombre" name = "nombre" type="text" class="form-control" value="{{$alumno->nombre}}">
                </div>
                
                <div class="form-group">
                    <label for="apellidos">apellidos</label>
                    <input id="apellidos" name = "apellidos" type="text" class="form-control" value="{{$alumno->apellidos}}">
                </div>
                
                
                <button class = 'btn btn-primary from-control' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
