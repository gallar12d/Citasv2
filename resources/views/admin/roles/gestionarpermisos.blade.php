<div class="modal" id="permisos">
      <div class="modal-dialog">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title"><font color="#eee">Gestionar permisos</font></h4>
       </div>
      <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
      </div>
     <div class="modal-body">
      <select id="select-permisos" multiple="multiple">
        @foreach($permiso as $per)
         <option value="{{ $per->id }}">{{ $per->display_name }}</option>
        @endforeach
      </select>
     </div>
      <div class="modal-footer">
       <a href="#" data-dismiss="modal" class="btn" value="RELOAD" onclick="location.reload();">Cerrar</a>
      </div>
    </div>
   </div>
  </div>
</div>