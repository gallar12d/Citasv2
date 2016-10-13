$(document).ready(function() {
    rol_id = null;
     var route = base + "/admin/permisos/asignar";
     var route2 = base + "/admin/permisos/desasignar";
     var route3 = base + "/admin/permisos/permisos";
   $('#select-permisos').multiSelect({
        selectableHeader: "<div class='custom-header'>Permisos no asignados</div>",
        selectionHeader: "<div class='custom-header'>Permisos asignados</div>",
       afterSelect:function(value){//enviamos al servidor el id del permiso seleccionado
            $.ajax({
            url : route,
            type : 'GET',
            dataType: 'json',
            data : {permission_id: value[0], role_id: rol_id}

        }).done(function(data){
            console.log(data);
           

        });
       },
       afterDeselect:function(value){//enviamos al servidor el id del permiso seleccionado
            $.ajax({
            url : route2,
            type : 'GET',
            dataType: 'json',
            data : {permission_id: value[0], role_id: rol_id}
        }).done(function(data){
            console.log(data);
            $("#msj-success").fadeIn();
        });
       }
   });
    
    
    $('.get-permisos').on('click', function(){

        rol_id = $(this).attr('rol_id');
        $.ajax({
            url : route3,
            type : 'GET',
            dataType: 'json',
            data : {id: rol_id}
        }).done(function(data){
            console.log(data);
            $.each(data.permisosAsignados ,function(index, value){
                $('#select-permisos option[value="' + value.permission_id + '"]').attr('selected', true);
            });
            $('#select-permisos').multiSelect('refresh');
            
        });
    });
});