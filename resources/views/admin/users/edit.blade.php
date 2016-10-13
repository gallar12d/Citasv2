@extends('admin.template.main')

@section('title')
    Inicio de mi pagina
@endsection
@include('flash::message')
@section('content')
<div class="row" style="position:relative; left: 400px;">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail" style="height: 450.22222px;width: 810.22222px; position:relative; left:-120px;">
			<div class="caption">
				<h3>Editar Usuario</h3>
				{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}

				<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' =>'Nombre completo', 'required']) !!}
				</div>

				<div class="form-group">
				{!! Form::label('email', 'Correo Electronico') !!}
				{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' =>'Email', 'required']) !!}
				</div>

			
			    <div class="form-group">
				{!! Form::label('type', 'Tipo') !!}
				{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
				</div>





				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>
@endsection

