@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
        <div class = 'container'>
            <h1>Show Respuesta</h1>
            <br>
            <form method = 'get' action = 'http://localhost:8000/respuesta'>
                <button class = 'btn btn-primary'>Respuesta Index</button>
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
                            <b><i>pregunta_id : </i></b>
                        </td>
                        <td>{{$respuesta->pregunta_id}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>descripcion : </i></b>
                        </td>
                        <td>{{$respuesta->descripcion}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>letra : </i></b>
                        </td>
                        <td>{{$respuesta->letra}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>correcta : </i></b>
                        </td>
                        <td>{{$respuesta->correcta}}</td>
                    </tr>



                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection