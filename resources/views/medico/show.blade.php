<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Medico</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Medico</h1>
            <br>
            <form method = 'get' action = 'http://localhost:8000/medico'>
                <button class = 'btn btn-primary'>Medico Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Nombres : </i></b>
                        </td>
                        <td>{{$medico->Nombres}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Apellidos : </i></b>
                        </td>
                        <td>{{$medico->Apellidos}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Identificacion : </i></b>
                        </td>
                        <td>{{$medico->Identificacion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Departamento_id : </i></b>
                        </td>
                        <td>{{$medico->Departamento_id}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Municipio_id : </i></b>
                        </td>
                        <td>{{$medico->Municipio_id}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha_nac : </i></b>
                        </td>
                        <td>{{$medico->Fecha_nac}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$medico->Celular}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$medico->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Especialidad_id : </i></b>
                        </td>
                        <td>{{$medico->Especialidad_id}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Direccion : </i></b>
                        </td>
                        <td>{{$medico->Direccion}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
