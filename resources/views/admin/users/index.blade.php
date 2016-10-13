@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')

<!-- BUSCADOR -->
{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}


<div class="row" style="position:relative; left: 400px;">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail" style="height: 450.22222px;width: 810.22222px; position:relative; left:-120px;">
			<div class="caption">
				<header>
					<h1>
						<span>Usuarios</span>
					</h1>
				</header>
				<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
				<hr>
									<!--Buscador-->

<!--	{!! Form::open(['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
		<span class="input-group-addon" id="search">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</span>
	</div>
	{!! Form::close() !!} -->
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
			@foreach($users as $user)
			
		<tr>
		  <td>{{ $user->id }}</td>
		  <td>{{ $user->name }}</td>
		  <td>{{ $user->email }}</td>
		  <td>
		  	@if($user->type == "admin")
		  		<span class="label label-danger">{{ $user->type }}</span>
			@else
				<span class="label label-primary">{{ $user->type }}</span>		
		  	@endif
		  </td>
		  <td>
		  <a href = '{{ route('admin.users.edit', $user->id) }}' class = 'viewEdit btn-floating blue'><i class='material-icons'>edit</i></a>

		 <a href ='{{ route('admin.users.destroy', $user->id) }}' class = 'delete btn-floating modal-trigger red' onclick="return confirm('Estas seguro de eliminar este usuario')"><i class = 'material-icons'>delete</i></a>



		  </td>






		</tr>	
			@endforeach
		</tbody>
	</table>
	<div id="modal1" class="modal">
            <div class = "row AjaxisModal">
            </div>
        </div>	

	{!! $users->render() !!}
			</div>

		</div>
	</div>
</div>
@endsection

