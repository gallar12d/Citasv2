//<![CDATA[
$(function() {
  $('.calendar').pignoseCalendar({
    select: function(date, obj) {
      obj.calendar.parent().next().show().text('Dias Seleccionados ' +
        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
        '.');
    }
  });

  $('.input-calendar').pignoseCalendar({
    buttons: true,
  });

  var $btn = $('.btn-calendar').pignoseCalendar({
    modal: true,
    buttons: true,
    apply: function(date) {
      $btn.next().show().text('You applied date ' + date + '.');
    }
  });

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
      // algo

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

      //console.log(data);
    var otro =  $(".pignose-calendar-body div").prev().attr('data');
    console.log(otro);

 //      $(".pignose-calendar-body div[data-date]").each(function(index) {
 //          var algo = $(this);
 //        //  var aText = $(this).find("div[data-date]").attr();
 //            //console.log(algo);
 // //alert(aText);
 // //return aText;
 //
 //
 //        //  arrayMe[index] = $(this).text();
 //          // algo
 //
 //          // $(this).removeClass();
 //          // $(this).addClass("parrafo");
 //          // $(this).text('Parrafo ' + index);
 //        })

  //  var munic = $('#municipio').empty();


    "events": [{
  "month": "10",
  "day": "19",
  "year": "2016",
  "title": "Lorem ipsum",
  "description": "Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam."
  }],
},

    });

});
