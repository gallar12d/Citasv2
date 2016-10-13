@extends('admin.template.main4')

@section('title', 'Lista de Empresas')

@section('content')


       <div class = 'container'>
        <div class="clearfix"></div>
        <br>
        <a class="btn btn-primary btn-flat" href="{!! route('afiliaciones.create') !!}">Crear Nueva Afiliacion</a>
            <br>
            <br>
            <div class="panel panel-blue">
             <div class="panel-heading">Afiliacion</div>
              <div class="panel-body">
               <div id="no-more-tables">
                 <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                 <thead class="cf">
                    <th>Codigo de la Empresa</th>
                    <th>Nombre Empresa</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($afiliaciones as $value)
                    <tr>
                        <td>{{$value->codigo_empresa}}</td>
                        <td>{{$value->nombre}}</td>
                        <td align="center">
                            <div class="demo-btn">

                                <a href = '{!! route('afiliaciones.edit', [$value->id]) !!}' class = 'btn btn-warning'><i class="fa fa-edit"></i></a>

                                <a href="{!! route('afiliaciones.delete', [$value->id]) !!}" class = 'btn btn-primary' onclick="return confirm('Desea eliminar esta Afiliacione?')"><i class="fa fa-bitbucket"></i></a>




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
