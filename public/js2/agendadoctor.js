document.getElementById('medico').addEventListener('change', function(){
    variable = this.value;

});

 $(this).css('background-color', 'red');
var guardar = function(){
var agenda = $('#start').val();
    $.ajax({
        url: base + '/api/v13/agendamiento/crearagenda',
        type: 'POST',
        dataType: 'JSON',
        data: {param1: variable, param2:agenda},
    }).success(function(data){
        swal("Felicidades!", "Fecha Restringida con exito!", "success",
        "timer: 5000",   "showConfirmButton: false");
         window.location.reload(true);
    });

}
