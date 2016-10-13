
@extends('admin.template.main2')

@section('title')
    Inicio de mi pagina
@endsection
@include('flash::message')
@section('content2')


<div class="row" style="position:relative; left: 400px;">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail" style="height: 650px;width: 810.22222px; position:relative; left:-120px;">
			<div class="caption">
			<header>
    		<h1>Registro<span>Usuarios</span></h1>
     		</header>
				
				
				{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

				<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre completo', 'required']) !!}
				</div>

			

				<div class="form-group">
				{!! Form::label('email', 'Correo Electronico') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' =>'Email', 'required']) !!}
				</div>

				<div class="form-group">
				{!! Form::label('password', 'Contraseña') !!}
				{!! Form::password('password', ['class' => 'form-control', 'required','placeholder' => '***********']) !!}
				</div>

			    <div class="form-group">
				{!! Form::label('type', 'Tipo') !!}
				{!! Form::select('type', ['' => 'Seleccione Usuario', 'usuario' => 'Usuario', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
				</div>

				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>
{!! Form::open(['route' => 'admin.roles.store', 'method' => 'POST']) !!}

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Roles</button>
			
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
			
			<div class="form-group">
				{!! Form::label('name', 'Nombre Rol') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre rol', 'required']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('display_name', 'Objetivo Rol') !!}
				{!! Form::text('display_name', null, ['class' => 'form-control', 'placeholder' =>'Objetivo rol', 'required']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('description', 'Descripción rol') !!}
				{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' =>'Descripción rol', 'required']) !!}
			</div>

			<div class="form-group">
			{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
			</div>


			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
			{!! Form::close() !!}
	
		</div>
	</div>
</div>

<script type="text/javascript">
	
</script>
@endsection

