$(document).ready(function() {

   // todas las funciones despues de que el documento esté listo
   //$( "#listaHorarios .panel-body" ).append( " <?php if (isset($_GET['page'])){ horariostable($_GET['page'], 1);} else{ horariostable(1, 1); } ?>" );
   // $('#contenthere').load('phpfilehere.php');
// alert("entra")
function testlogin() {
  return $.ajax({
       url: '/api/usuario/obtenerlogin',
                   type: 'GET',
  });
}


 var promise = testlogin();
                       var islogin = promise.success(function (data) {
                         // alert(data)
                         
                         if(data == 0){
                          $('#agendar').hide()
                         
                            
                          //si el user es visitante entoces se oculta la x de la tarea que elimina la tarea 
                        

                       }
                       else{
                        $('#agendar').show()
                        

                       }
                        });


function borrardelete(data){

   
   if(data == 0)
   $(".delhorario").hide()
};

   $('#tipoatencion').on('change', function() {
     // alert(this.value); // or $(this).val()
      //hacemos el llamado al ajax al servidor php con valor del value
      // alert('asdf'+this.value+'dfas');
     

          $.ajax({
            data: {
               // "idmedico": $( "#nombre option:selected" ).text(),
               "tipoatencion": this.value
            },
            url: 'horario/include/functions.php',
            type: 'post',
            success: function(response) {
               //console.log(response);
               $.getScript("horario/js/scripts-custom.js").done(function(script, textStatus) {
                  //console.log( textStatus );
               }).fail(function(jqxhr, settings, exception) {
                  // $( "div.log" ).text( "Triggered ajaxError handler." );
               });
               $("#listaHorarios .panel-body").empty();
               $("#listaHorarios .panel-body").html(response);

               //si el usuario es invitado no mostrar el borrar;

               $.ajax({
                   url: '/api/usuario/obtenerlogin',
                   type: 'GET',
                   // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                   // data: {param1: 'value1'},
                })
                .done(function(data) {

                  borrardelete(data);
                  
                   // if (data === 'true'){
                     // $(".delhorario").hide();
                      // console.log(data);
                   // }
                    
                })
                .fail(function() {
                   console.log("error");
                })
                .always(function() {
                   console.log("complete");
                });
                 

              
            }
         });


      

         
      
   });
});
