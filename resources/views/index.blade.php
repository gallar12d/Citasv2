@extends('admin.template.main4')
@section('title', 'Lista de usuarios')
@section('content')
      @parent

<div class="clearfix"></div>
</div>
<div  ng-controller="employeesController">
<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
<div class="page-content">
<div class="row">
 <div class="col-lg-12">
 <div class="portlet box">
 <div class="portlet-header pam mbn">
  <div class="portlet-body">
  <div class="btn-group mtm mbm">


<a href="#" data-toggle="dropdown" class="btn btn-warning btn-sm dropdown-toggle">
  <i class="fa fa-wrench"></i>&nbsp; Exportar</a>
<div class="clearfix">
</div>
<br>
<p>
<button id="btn-add" class="btn btn-primary btn-sm dropdown-toggle" ng-click="toggle('add', 0)">Agregar nuevos Alumnos</button>
</p>

<div class="well well-sm text-right">
    <button id="btn-insertar-masivo" class="btn btn-info" type="button">Registrar varios Alumnos</button>
</div>

@include('admin.template.dataExport')

</div>

<div class="panel panel-blue">
  <div class="panel-heading">Tabla Alumnos</div>
   <div class="panel-body">
    <div id="no-more-tables">

<div class="col-lg-4">
  <div class="input-group">
  <input type="text" class="form-control" ng-model="search">
  <span class="input-group-addon">Busqueda</span>
  </div>
  <div class="mbl">
  </div>
  </div>



<table class="table table-bordered table-striped table-condensed cf">    <thead class="cf">
     <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Contacto No</th>
      <th>Posición</th>
      <th>Imagen</th>
      <th>Acciones</th>
     </tr>
    </thead>

    <tbody id="paginacion">
    <ng-pagination-search pagination-id="usuarios"></ng-pagination-search>
     <tr ng-repeat="item in filtered = items | filter:search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
      <td>@{{  item.id }}</td>
      <td  id="@{{item.id}}"><button id="bueno" onclick="readVariable(this)" class="btn-link" value="@{{  item.id }}">@{{ item.name }}</button></td>
      <td>@{{ item.email }}</td>
      <td>@{{ item.contact_number }}</td>
      <td>@{{ item.position }}</td>
      <!-- <td><img ng-src"item.image" width="150" height="90" /></td> -->
      <td><img ng-src="@{{ item.image }}" width="150" height="90"></td>
      <td>
        <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', item.id)">Edit</button>
        <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(item.id)">Delete</button>
      </td>
     </tr>

    </tbody>
   </table>
   <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>
   <ng-pagination-control pagination-id="usuarios" color="white" height="35px"></ng-pagination-control>
            @include('admin.template.export')
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<!-- Modal para agregar usuarios -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
   <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>
  </div>
  <div class="modal-body">

  <form name="frmEmployees" ng-submit="uploadFile()" class="form-horizontal" novalidate="" enctype="multipart/form-data">
   <div class="form-group error">
    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
     <div class="col-sm-9">
      <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="@{{name}}"
      ng-model="employee.name" ng-required="true">
      <span class="help-inline" ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
    </div>
 </div>
 <div class="form-group">
   <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
   <div class="col-sm-9">
    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="@{{email}}" ng-model="employee.email" ng-required="true">
    <span class="help-inline"ng-show="frmEmployees.email.$invalid && frmEmployees.email.$touched">Valid Email field is required</span>
    </div>
  </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
         <div class="col-sm-9">
          <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="@{{contact_number}}"
          ng-model="employee.contact_number" ng-required="true">
          <span class="help-inline" ng-show="frmEmployees.contact_number.$invalid && frmEmployees.contact_number.$touched">Contact number field is required</span>
         </div>
        </div>
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Position</label>
          <div class="col-sm-9">
           <input type="text" class="form-control" id="position" name="position" placeholder="Position" value="@{{position}}" ng-model="employee.position" ng-required="true">
           <span class="help-inline" ng-show="frmEmployees.position.$invalid && frmEmployees.position.$touched">Posicion campo requerido</span>
        </div>
       </div>
         <div class="clearfix"></div><br>
    <div class="col-xs-12">
        <div class="form-group">

       <input type="file" id="file" ng-src="@{{ item.image }}" ng-model="employee.image" name="file" file-model="employee.file" ng-required="true" required>
        </div>
    </div>

 </form>
</div>
    <div class="modal-footer">
     <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)">Guardar</button>
   </div>
  </div>
 </div>
</div>

<div id="list"></div>
<user-modal></user-modal>
<user-modal-insert></user-modal-insert>



@section('js')
<script src="<?= asset('js/lista.js') ?>"></script>
<script src="<?= asset('app/controllers/employees.js') ?>"></script>
<script src="{{ asset('app/view/components/user-modal.tag') }}" type="riot/tag"></script>
<script src="{{ asset('app/view/components/user-modal-insert.tag') }}" type="riot/tag"></script>



<script>
$(document).ready(function(){



/*

riot.mount('user-modal');
*/});
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
