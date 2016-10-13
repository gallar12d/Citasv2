@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')

<!-- BUSCADOR -->
                                    <!--Termina Buscador-->

        <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Acción</th>

    
        </thead>
        <tbody>
            @foreach($permiso as $per)
            
        <tr>
          <td>{{ $per->id }}</td>
          <td>{{ $per->name }}</td>


        </tr>   
            @endforeach
        </tbody>
    </table>
            </div>

        </div>
    </div>
@endsection

