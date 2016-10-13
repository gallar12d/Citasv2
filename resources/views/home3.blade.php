<!DOCTYPE html>
<html lang="en-US" ng-app="employeeRecords">
<head>
    <title>Laravel 5 AngularJS CRUD Example</title>

<link href="<?= asset('css/bootstrap-3.0.0.min.css') ?>" rel="stylesheet">
</head>
<body>
<h2>Pacientes</h2>
<div  ng-controller="pacientesController">

    <!-- Table-to-load-the-data Part -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>

            <th><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Agregar nuevos pacientes</button></th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="paciente in pacientes">
            <td>@{{ paciente.id }}</td>
            <td>@{{ paciente.name }}</td>
            <td>@{{ paciente.email }}</td>
            <td>@{{ paciente.contact_number }}</td>
            <td>@{{ paciente.position }}</td>
            <td>
                <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', paciente.id)">Edit</button>
                <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(paciente.id)">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- End of Table-to-load-the-data Part -->

<form name="frmEmployees" class="form-horizontal" novalidate="">
<div class="col-sm-9">
<input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="@{{name}}"  ng-model="paciente.name" ng-required="true">
<span class="help-inline"  ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
</div>

</form>
<button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmEmployees.$invalid">Guardar</button>

</div>


<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/controllers/paciente.js') ?>"></script>
</body>
</html>



