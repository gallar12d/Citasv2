<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Medico</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Medico</h1>
            <form method = 'get' action = 'http://localhost:8000/medico'>
                <button class = 'btn btn-danger'>Medico Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/medico/{{$medico->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="Nombres">Nombres</label>
                    <input id="Nombres" name = "Nombres" type="text" class="form-control" value="{{$medico->Nombres}}">
                </div>
                
                <div class="form-group">
                    <label for="Apellidos">Apellidos</label>
                    <input id="Apellidos" name = "Apellidos" type="text" class="form-control" value="{{$medico->Apellidos}}">
                </div>
                
                <div class="form-group">
                    <label for="Identificacion">Identificacion</label>
                    <input id="Identificacion" name = "Identificacion" type="text" class="form-control" value="{{$medico->Identificacion}}">
                </div>
                
                <div class="form-group">
                    <label for="Departamento_id">Departamento_id</label>
                    <input id="Departamento_id" name = "Departamento_id" type="text" class="form-control" value="{{$medico->Departamento_id}}">
                </div>
                
                <div class="form-group">
                    <label for="Municipio_id">Municipio_id</label>
                    <input id="Municipio_id" name = "Municipio_id" type="text" class="form-control" value="{{$medico->Municipio_id}}">
                </div>
                
                <div class="form-group">
                    <label for="Fecha_nac">Fecha_nac</label>
                    <input id="Fecha_nac" name = "Fecha_nac" type="text" class="form-control" value="{{$medico->Fecha_nac}}">
                </div>
                
                <div class="form-group">
                    <label for="Celular">Celular</label>
                    <input id="Celular" name = "Celular" type="text" class="form-control" value="{{$medico->Celular}}">
                </div>
                
                <div class="form-group">
                    <label for="email">email</label>
                    <input id="email" name = "email" type="text" class="form-control" value="{{$medico->email}}">
                </div>
                
                <div class="form-group">
                    <label for="Especialidad_id">Especialidad_id</label>
                    <input id="Especialidad_id" name = "Especialidad_id" type="text" class="form-control" value="{{$medico->Especialidad_id}}">
                </div>
                
                <div class="form-group">
                    <label for="Direccion">Direccion</label>
                    <input id="Direccion" name = "Direccion" type="text" class="form-control" value="{{$medico->Direccion}}">
                </div>
                
                
                <button class = 'btn btn-primary from-control' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
