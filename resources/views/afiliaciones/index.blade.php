@extends('admin.template.main4')

@section('title', 'Lista de Afiliaciones')

@section('content')


       <div class = 'container'>
        <div class="clearfix"></div>
        <br>
        <a class="btn btn-primary btn-flat" href="{!! route('afiliaciones.create') !!}"><i class="fa fa-plus-circle"></i>&nbsp;Crear Afiliacion</a>
            <br>
            <br>

  <div>
  <button id="btn-insertar-masivo" class="btn btn-info" type="button"><i class="fa fa-plus-circle"></i>&nbsp;Crear Varias Afiliaciones</button>
  </div>
        <div class="clearfix"></div>
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
                    <tr id="afiliacionesemp">
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
<div id="list"></div>
<user-modal></user-modal>
<user-modal-insert></user-modal-insert>

@section('js')
<script src="{{ asset('app/view/components/user-modal-insert.tag') }}" type="riot/tag"></script>
<script>
$(document).ready(function(){
});
 function readVariable(elem){
        var obj = elem.parentNode.id;
        riot.mount('user-modal',{
            obj
        });
    }
$("#btn-insertar-masivo").click(function(){
    riot.mount('user-modal-insert');
})
</script>
@endsection
@stop
