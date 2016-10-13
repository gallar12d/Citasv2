@extends('admin.template.main3')

@section('title', 'Lista de usuarios')

@section('content')
      @parent
        <div class = 'container'>
            <h1>Prueba Index</h1>
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/prueba/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Prueba</button>
            </form>
            <br>

            <br>
            <table class = "table table-striped table-bordered">
                <thead>

                    <th>nombre</th>


                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($pruebas as $value)
                    <tr>

                        <td>{{$value->nombre}}</td>


                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/prueba/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>Eliminar</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/prueba/{{$value->id}}/edit'><i class = 'material-icons'>Editar</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/prueba/{{$value->id}}'><i class = 'material-icons'>Mostrar</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
@endsection