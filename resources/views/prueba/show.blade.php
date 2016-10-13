@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
      @parent
        <div class = 'container'>
            <h1>Mostrar Prueba</h1>
            <br>
            <form method = 'get' action = 'http://localhost:8000/prueba'>
                <button class = 'btn btn-primary'>Prueba Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Clave</th>
                    <th>Valor</th>
                </thead>
                <tbody>


                    <tr>
                        <td>
                            <b><i>nombre : </i></b>
                        </td>
                        <td>{{$prueba->nombre}}</td>
                    </tr>



                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection