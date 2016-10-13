@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
        <div class = 'container'>
            <h1>Show Pregunta</h1>
            <br>
            <form method = 'get' action = 'http://localhost:8000/pregunta'>
                <button class = 'btn btn-primary'>Pregunta Index</button>
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
                            <b><i>prueba_id : </i></b>
                        </td>
                        <td>{{$pregunta->prueba_id}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>descripcion : </i></b>
                        </td>
                        <td>{{$pregunta->descripcion}}</td>
                    </tr>



                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection