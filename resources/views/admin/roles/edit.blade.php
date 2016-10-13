{!! Form::model($role,['route'=> ['admin.roles.update', $role->id],'method'=>'PUT']) !!}

     <div class="modal" style="max-height: 90%;" id="crear_roles2" >
       <div class="modal-dialog">
         <div class="modal-header" >
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
             <h4 class="modal-title"><font color="#eee">Crear Rol</font></h4>
         </div>
     <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
     </div>
     <div class="modal-body">
        {!! Form::open(['route' => 'admin.roles.store', 'method' => 'POST']) !!}
    <div class="material-input">
        {!! Form::label('name', 'Nombre rol') !!}
        {!! Form::text('name', null, ['class' => 'form-control',  'id' => 'inputSuccess', 'placeholder' =>'Rol', 'required']) !!}
    </div>
    <div class="material-input">
        {!! Form::label('display_name', 'Nombre a mostrar') !!}
        {!! Form::text('display_name', null, ['class' => 'form-control', 'placeholder' =>'Nombre a mostrar', 'required']) !!}
    </div>
   <div class="material-input">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' =>'Descripción', 'style' => 'height: 94px;', 'required']) !!}
    </div>
    <br/>
    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
        {!! Form::close() !!}
    </div>
    <div class="modal-footer">
       <a href="#" data-dismiss="modal" class="btn" value="RELOAD" onclick="location.reload();">Cerrar</a>
    </div>
  </div>
</div>
{!! Form::close() !!}