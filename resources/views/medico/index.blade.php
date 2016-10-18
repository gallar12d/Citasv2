  @extends('admin.template.main4')

  @section('title', 'Lista de Medicos')

  @section('content')

  <div class = 'container'>
   <div class="clearfix"></div>
   <br>
   <a class="btn btn-danger btn-flat" href="{!! route('medico.create') !!}">Crear Nuevo Medico&nbsp;<i class="fa fa-plus-circle"></i></a>
       <br>
       <br>
       <div class="panel panel-blue">
        <div class="panel-heading">Medico</div>
         <div class="panel-body">
          <div id="no-more-tables">
            <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                  <thead>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Identificacion</th>
                      <th>Acciones</th>
                  </thead>
                  <tbody>
                      @foreach($medicos as $value)
                      <tr>

                          <td>{{$value->Nombres}}</td>
                          <td>{{$value->Apellidos}}</td>
                          <td>{{$value->Identificacion}}</td>
                          <td align="center">
                              <div class="demo-btn">

                                <a href = '{!! route('medico.show', [$value->id]) !!}' class = 'btn btn-info'><i class="fa fa-eye"></i></a>

                                <a href = '{!! route('medico.edit', [$value->id]) !!}' class = 'btn btn-warning'><i class="fa fa-edit"></i></a>

                                <a href="{!! route('medico.delete', [$value->id]) !!}" class = 'btn btn-primary' onclick="return confirm('Desea eliminar esta Medico?')"><i class="fa fa-bitbucket"></i></a>


                              </div>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class = 'AjaxisModal'>
          </div>
      </div>
  @endsection
