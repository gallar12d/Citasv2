@extends('admin.template.main4')

@section('title', 'Lista de Empresas')

@section('content')


       <div class = 'container'>
        <div class="clearfix"></div>
        <br>
        <a class="btn btn-primary btn-flat" href="{!! route('empresa.create') !!}">Crear Nueva Empresa</a>
            <br>
            <br>
            <div class="panel panel-blue">
             <div class="panel-heading">Empresas</div>
              <div class="panel-body">
               <div id="no-more-tables">
                 <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                 <thead class="cf">
                    <th>nombre</th>
                    <th>direccion</th>
                    <th>ruc</th>
                    <th>correo</th>
                    <th>telefono</th>
                    <th>imagen</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($empresas as $value)
                    <tr>
                        <td>{{$value->nombre}}</td>
                        <td>{{$value->direccion}}</td>
                        <td>{{$value->ruc}}</td>
                        <td>{{$value->correo}}</td>
                        <td>{{$value->telefono}}</td>
                        <td><img src="{{ $value->image }}"></td>
                        <td align="center">
                            <div class="demo-btn">

                                <a href = '{!! route('empresa.show', [$value->id]) !!}' class = 'btn btn-warning'><i class="fa fa-search"></i></a>

                                <a href = '{!! route('empresa.edit', [$value->id]) !!}' class = 'btn btn-red'><i class="fa fa-edit"></i></a>

                                <a data-toggle="modal" data-target="#myModal" class = 'btn btn-danger' data-link = "/empresa/{{$value->id}}" ><i class="fa fa-bitbucket"></i></a>
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
