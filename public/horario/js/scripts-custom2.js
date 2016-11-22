$(document).ready(function() {
   // todas las funciones despues de que el documento esté listo
   //$( "#listaHorarios .panel-body" ).append( " <?php if (isset($_GET['page'])){ horariostable($_GET['page'], 1);} else{ horariostable(1, 1); } ?>" );
   // $('#contenthere').load('phpfilehere.php');
   $('#nombre').on('change', function() {
     // alert(this.value); // or $(this).val()
      //hacemos el llamado al ajax al servidor php con valor del value
      if (this.value > 0) {
         $.ajax({
            data: {
               "idmedico": this.value,
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
            }
         });
      }
   });
});
$('.verhorario2').on('click', function() {
   alert('entro al verhorario2')
});
$('.verhorario2').delegate('click', function() {
   var dataid = $(this).attr('data-id');
   var processsend = 'process=3&data=' + dataid;
   $.ajax({
      type: 'POST',
      url: 'horario/include/process.php',
      data: processsend,
      beforeSend: function() {
         $('#appenddata').html(' ');
      },
      success: function(data) {
         $('#appenddata').html(data);
         $('#ViewHorario').modal('show');
         //----------------------------------------------------------------------------------------------
         // Mostrar Boton Add
         $(".td-line").hover(function() {
            var count = $(this).find('div label').length;
            if (count == 0) $(this).find('button').show();
         }, function() {
            $(this).find('button').hide();
         });
         //si el user es visitante entoces se oculta la x de la tarea que elimina la tarea 
         $('.deltasker').hide();
         // Agregar Informacion
         $('.addinfo').on('click', function() {
            var dum = $(this).attr('data-row');
            $('#DataEdit').modal('show');
            $('#tede').val(dum);
         });
         var curr = new Date; // get current date
         var first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
         var last = first + 6; // last day is the first day + 6
         var firstday = new Date(curr.setDate(first)).toUTCString();
         var lastday = new Date(curr.setDate(last)).toUTCString();
         // alert (firstday + lastday);
         // Borrar la tarea
         $('.delinfo').on('click', function() {
            var dum = $(this).attr('data-row');
            $('#' + dum).text('').removeClass('purple-label red-label blue-label pink-label').hide();
         });
         // Guardar Tarea
         $('.savetask').on('click', function() {
            var tede = $('#tede').val();
            var tasker = $('#nametask').val();
            var color = $('#idcolortask option:selected').val();
            $('#DataEdit').modal('toggle');
            $('#' + tede).append('<label class="label-desc ' + color + '">' + tasker + ' <a class="deltasker"><i class="fa fa-times"></i></a></label>');
            //$('#'+tede).text(tasker).addClass(color).show();
            $('#taskfrm')[0].reset();
            $('.deltasker').on('click', function() {
               var element = $(this).parent();
               element.addClass('animated bounceOut');
               setTimeout(function() {
                  element.remove();
               }, 1000);
            });
         });
         $('.deltasker').on('click', function() {
            var element = $(this).parent();
            element.addClass('animated bounceOut');
            setTimeout(function() {
               element.remove();
            }, 1000);
         });
         $('.changethetime').on('click', function() {
            var theparent = $(this).attr('data-time');
            $('.hideedittime').hide();
            $('.timeblock').show();
            $('#parent' + theparent).hide();
            $('#edit' + theparent).show();
         });
         $('.savetime').on('click', function() {
            var savetime = $(this).attr('data-save');
            var datasavetime = $('#input' + savetime).val();
            $('#edit' + savetime).hide();
            $('#parent' + savetime).show();
            $('#data' + savetime).text(datasavetime);
            $('#data' + savetime).addClass('animated flash');
            setTimeout(function() {
               $('#data' + savetime).removeClass('flash');
            }, 1000);
         });
         $('.deleteblock').on('click', function() {
            var block = $(this).attr('data-block');
            $('#tr' + block).addClass('animated bounceOutLeft');
            setTimeout(function() {
               $('#tr' + block).remove();
            }, 1000);
         });
         $('.canceledit').on('click', function() {
            $('.hideedittime').hide();
            $('.timeblock').show();
         });
         $('.guardarhorario').on('click', function() {
            var btnsave = $(this);
            var descripcion = $('#descripcioninput').val();
            var nombre = $('#nombreinput').val();
            var horario = $('#edithorariotabledata').html();
            var iddata = $('#inputidedit').val();
            var horariodata = 'process=4&nombre=' + nombre + '&descripcion=' + descripcion + '&horario=' + horario + '&id=' + iddata;
            $.ajax({
               type: 'POST',
               url: 'horario/include/process.php',
               data: horariodata,
               beforeSend: function() {
                  btnsave.prop('disabled', true);
                  $('#horario-name').addClass('opacityelement');
                  $('#thetable').addClass('opacityelement');
               },
               success: function() {
                  $('#thetable').addClass('animated bounceOut');
                  btnsave.prop('disabled', false);
                  setTimeout(function() {
                     $('#ViewHorario').modal('toggle');
                  }, 1000);
               },
               error: function() {
                  novalid();
               }
            });
         });
         //----------------------------------------------------------------------------------------------
      },
      error: function() {
         novalid();
      }
   });
});
$('.delhorario').on('click', function() {
   var horario = $(this).attr('data-id');
   var horariodata = 'process=5&dataid=' + horario;
   var elemento = $('#trhorario' + horario);
   $.ajax({
      type: 'POST',
      url: 'horario/include/process.php',
      data: horariodata,
      beforeSend: function() {
         elemento.find('button').prop('disabled', true);
         elemento.addClass('opacityelement');
      },
      success: function() {
         elemento.addClass('animated bounceOut');
         setTimeout(function() {
            elemento.remove();
         }, 1000)
      },
      error: function() {
         novalid();
      }
   });
});