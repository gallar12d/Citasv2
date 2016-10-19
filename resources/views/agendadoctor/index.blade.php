@extends('admin.template.main4')

@section('title', 'Agendamiento')

@section('content')


<div class="clearfix"></div><br>
<br>
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <span class="input-group-addon">Medicos: </span>
      <select id="medico" name="medico" data-style="btn-primary" class="form-control">
        <option selected value="">Seleccione...</option>
          @foreach($medicos as $medic)
        <option id="{{ $medic->id }}" value="{{ $medic->id }}">{{ $medic->Nombres }}</option>
          @endforeach
  </select>
    </div>
  </div>
</div>



 <div class="container">
<div class="clearfix"></div>
<br>
    <div class="row">
            <div class="col-lg-12 text-center">
                <p class="lead"></p>
                <div class="clearfix"></div>
                <br>
                <div id="calendar" class="col-centered">
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Modal -->
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal">
            <form name="frmEmployees" class="form-horizontal" novalidate="" enctype="multipart/form-data">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Event</h4>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="text" name="start" class="form-control" id="start">
                    </div>
                  </div>

                <div class="form-group">
                 <label class="col-md-3 control-label">Fecha a Restringir</label>
                  <div class="col-md-5">
                   <input class="datepicker" data-date-format="dd/mm/yyyy" name="Fecha_nac"  required>
                  </div>
                </div>




              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" onclick="guardar()" class="btn btn-primary">Guardar</button>
              </div>
              </form>

            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal" method="POST" action="editEventTitle.php">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
              </div>
              <div class="modal-body">

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
                          </div>
                        </div>
                    </div>

                  <input type="hidden" name="id" class="form-control" id="id">


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="{{ asset('js2/jquery-1.10.2.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- FullCalendar -->
    <script src='{{ asset('lib/moment.min.js') }}'></script>
    <script src='{{ asset('fullcalendar/fullcalendar.min.js') }}'></script>
    <script type="text/javascript">
    $.fn.datepicker.defaults.format = "mm/dd/yyyy";
    $('.datepicker').datepicker({
        startDate: '-3d'
    });
  </script>


    <script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'mes'
            },
            defaultDate: '2016-01-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function(start, end) {

                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function(event, element) {
                element.bind('dblclick', function() {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position

                edit(event);

            },

            eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

                edit(event);

            },

events: [

        <?php foreach($agenda as $agend):

                $start = explode(" ", $agend['start']);
                if($start[1] == '00:00:00'){
                    $start = $start[0];
                }else{
                    $start = $event['start'];

                }
                 ?>
                {
                  start: '<?php echo $start; ?>',
                  overlap: false,
                  rendering: 'background',
                  color: 'red'

                },
            <?php endforeach; ?>

            ]


        });

        function edit(event){
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end){
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }else{
                end = start;
            }

            id =  event.id;

            Event = [];
            Event[0] = id;
            Event[1] = start;
            Event[2] = end;

            $.ajax({
             url: 'editEventDate.php',
             type: "POST",
             data: {Event:Event},
             success: function(rep) {
                    if(rep == 'OK'){
                        alert('Saved');
                    }else{
                        alert('Could not be saved. try again.');
                    }
                }
            });
        }

    });

</script>
<script src="{{ asset('js2/agendadoctor.js') }}"></script>

@stop@extends('admin.template.main4')

@section('title', 'Agendamiento')

@section('content')


<div class="clearfix"></div><br>
<br>
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <span class="input-group-addon">Medicos: </span>
      <select id="medico" name="medico" data-style="btn-primary" class="form-control">
        <option selected value="">Seleccione...</option>
          @foreach($medicos as $medic)
        <option id="{{ $medic->id }}" value="{{ $medic->id }}">{{ $medic->Nombres }}</option>
          @endforeach
  </select>
    </div>
  </div>
</div>



 <div class="container">
<div class="clearfix"></div>
<br>
    <div class="row">
            <div class="col-lg-12 text-center">
                <p class="lead"></p>
                <div class="clearfix"></div>
                <br>
                <div id="calendar" class="col-centered">
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Modal -->
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal">
            <form name="frmEmployees" class="form-horizontal" novalidate="" enctype="multipart/form-data">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Event</h4>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="text" name="start" class="form-control" id="start">
                    </div>
                  </div>

                <div class="form-group">
                 <label class="col-md-3 control-label">Fecha a Restringir</label>
                  <div class="col-md-5">
                   <input class="datepicker" data-date-format="dd/mm/yyyy" name="Fecha_nac"  required>
                  </div>
                </div>




              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" onclick="guardar()" class="btn btn-primary">Guardar</button>
              </div>
              </form>

            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal" method="POST" action="editEventTitle.php">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
              </div>
              <div class="modal-body">

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
                          </div>
                        </div>
                    </div>

                  <input type="hidden" name="id" class="form-control" id="id">


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="{{ asset('js2/jquery-1.10.2.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- FullCalendar -->
    <script src='{{ asset('lib/moment.min.js') }}'></script>
    <script src='{{ asset('fullcalendar/fullcalendar.min.js') }}'></script>
    <script type="text/javascript">
    $.fn.datepicker.defaults.format = "mm/dd/yyyy";
    $('.datepicker').datepicker({
        startDate: '-3d'
    });
  </script>


    <script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'mes'
            },
            defaultDate: '2016-01-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function(start, end) {

                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function(event, element) {
                element.bind('dblclick', function() {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position

                edit(event);

            },

            eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

                edit(event);

            },

events: [

        <?php foreach($agenda as $agend):

                $start = explode(" ", $agend['start']);
                if($start[1] == '00:00:00'){
                    $start = $start[0];
                }else{
                    $start = $event['start'];

                }
                 ?>
                {
                  start: '<?php echo $start; ?>',
                  overlap: false,
                  rendering: 'background',
                  color: 'red'

                },
            <?php endforeach; ?>

            ]


        });

        function edit(event){
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end){
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }else{
                end = start;
            }

            id =  event.id;

            Event = [];
            Event[0] = id;
            Event[1] = start;
            Event[2] = end;

            $.ajax({
             url: 'editEventDate.php',
             type: "POST",
             data: {Event:Event},
             success: function(rep) {
                    if(rep == 'OK'){
                        alert('Saved');
                    }else{
                        alert('Could not be saved. try again.');
                    }
                }
            });
        }

    });

</script>
<script src="{{ asset('js2/agendadoctor.js') }}"></script>

@stop
