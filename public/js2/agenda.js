//<![CDATA[

    $(function() {
        $('.calendar').pignoseCalendar({
            select: function(date, obj) {
                obj.calendar.parent().next().show().text('Dias Seleccionados ' +
                (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
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
                (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                '.');
            }
        });

        $('.multi-select-calendar').pignoseCalendar({
            multiple: true,
            select: function(date, obj) {
                obj.calendar.parent().next().show().text('Dias seleccionados ' +
                    (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                    '~' +
                    (date[1] === null? 'null':date[1].format('YYYY-MM-DD')) +
                    '.');
            }
        });

        $('.toggle-calendar').pignoseCalendar({
            toggle: true,
            select: function(date, obj) {
                var $target = obj.calendar.parent().next().show().html('Dias seleccionados ' +
                (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                '.' +
                '<br /><br />' +
                '<strong>Datos</strong><br /><br />' +
                '<div class="active-dates"></div>');

                for(var idx in obj.storage.activeDates) {
                    var date = obj.storage.activeDates[idx];
                    if(typeof date !== 'string') {
                        continue;
                    }


                    $target.find('.active-dates').append('<span name="agenda" class="label label-default">' + date + '</span>');
                }
            }

        });

        $('.language-calendar').each(function() {
            var $this = $(this);
            console.log($this);
            var lang = $this.data('lang');
            $this.pignoseCalendar({
                lang: lang
            });
        });
    });
    //]]>

document.getElementById('medicos').addEventListener('change', function(){
    variable = this.value;
});







