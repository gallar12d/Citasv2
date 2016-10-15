

@extends('admin.template.main4')

@section('title', 'Lista de Especialidades')

@section('content')


       <div class = 'container'>
        <div class="clearfix"></div>
        <br>
        <a class="btn btn-primary btn-flat" href="{!! route('especialidades.create') !!}">Crear Nueva Especialidad</a>
            <br>
            <br>
            <div class="panel panel-blue">
             <div class="panel-heading">Especialidad</div>
              <div class="panel-body">
               <div id="no-more-tables">
                 <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                 <thead class="cf">
                    <th>Nombre de la Especialidad</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($especialidades as $value)
                    <tr>
                        <td>{{$value->nombre}}</td>
                        <td>{{$value->descripcion}}</td>
                        <td align="center">
                            <div class="demo-btn">

                                <a href = '{!! route('especialidades.edit', [$value->id]) !!}' class = 'btn btn-warning'><i class="fa fa-edit"></i></a>

                                <a href="{!! route('especialidades.delete', [$value->id]) !!}" class = 'btn btn-primary' onclick="return confirm('Desea eliminar esta Especialidad?')"><i class="fa fa-bitbucket"></i></a>



                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>


@stop
