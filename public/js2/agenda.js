//<![CDATA[
$(function() {


  $('.calendar-dark').pignoseCalendar({
    theme: 'dark',
    select: function(date, obj) {
      obj.calendar.parent().next().show().text('Dias seleccionados ' +
        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
        '.');
    }
  });

  $('.multi-select-calendar').pignoseCalendar({
    multiple: true,
    select: function(date, obj) {
      obj.calendar.parent().next().show().text('Dias seleccionados ' +
        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
        '~' +
        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
        '.');
    }
  });

  $('.toggle-calendar').pignoseCalendar({
    toggle: true,
    select: function(date, obj) {

      var $target = obj.calendar.parent().next().show().html('Dias seleccionados ' +
        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
        '.' +
        '<br /><br />' +
        '<strong>Datos</strong><br /><br />' +
        '<div class="active-dates"></div>');

      for (var idx in obj.storage.activeDates) {
        var date = obj.storage.activeDates[idx];

        if (typeof date !== 'string') {
          continue;
        }

        $target.find('.active-dates').append('<span class="label label-default">' + date + '</span>');

      }
    }
  });

  $(function() {
    $("#guardarAgenda").click(function() {
      alert(1);

    })
  })

  $('.language-calendar').each(function() {
    var $this = $(this);
    var lang = $this.data('lang');
    $this.pignoseCalendar({
      lang: lang
    });
  });
});
//]]>

document.getElementById('medicos').addEventListener('change', function() {
  variable = this.value;
});

function guardar() {
  var arrayMe = [];
  $(".active-dates span").each(function(index) {
      var algo = $(this).text();

      arrayMe[index] = $(this).text();

      // $(this).removeClass();
      // $(this).addClass("parrafo");
      // $(this).text('Parrafo ' + index);
    })
    //sacar el id del medico

  // ya tengo el arreglo en arrayMe, ahora mandarlo al controlador

  $.ajax({
      url: base + '/api/v13/agendamiento/crearagendamiento',
      type: 'POST',
      dataType: 'JSON',
      data: {
        param1: variable,
        param2: arrayMe
      },
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });

}

//sacamos datos con el onchange

document.getElementById('medicos').addEventListener('change', function(){
    var variable = this.value;

    $.ajax({
        url: base + '/api/v13/agendamiento/obtenerHorario',
        type: 'POST',
        dataType: 'JSON',
        data: {id: variable},

    }).success(function(data){
      console.log(data);
  //  var munic = $('#municipio').empty();










    $.each(data, function(index, val) {

    var data_area = '<option value="'+val.id+'">' + val.nombre + '</option>';
    munic.append(data_area);
    });

    });

});
