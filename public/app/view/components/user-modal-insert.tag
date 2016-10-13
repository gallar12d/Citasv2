<user-modal-insert>
    <div id="user-modal-tag" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar varios alumnos a la vez</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Departamento</th>
                                <th>Municipio</th>
                                <th>Correo</th>
                                <th>Sexo</th>
                                <th>Nacimiento</th>
                                <th>Imagen</th>
                                <th style="width:60px;"></th>
                            </tr>
                            <!-- Formulario para agregar nuevos alumnos -->
                            <tr>
                                <td>
                                    <input id="nombre" type="text" placeholder="Nombre" class="form-control" />
                                </td>
                                <td>
                                    <input id="apellido" type="text" placeholder="Apellido" class="form-control" />
                                </td>
                                <td>
                                    <select id="carrera" onchange={cambiar} class="form-control">
                                        <option each={carreras} id="{id}" value="{id}">{nombre}</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="municipio"  class="form-control">
                                        <option value=""></option>
                                    </select>
                                </td>
                                <td>
                                    <input id="correo" type="text" placeholder="Correo" class="form-control" />
                                </td>
                                <td>
                                    <select id="sexo" class="form-control">
                                        <option value="1">Hombre</option>
                                        <option value="0">Mujer</option>
                                    </select>
                                </td>
                                <td>
                                    <input id="nacimiento" type="text" placeholder="Cumpleaños" class="form-control" />
                                </td>
                                <td>
                                    <button class="btn btn-block btn-default" type="button" onclick={agregar}>Agregar</button>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr each={data}>
                                <td>
                                    {Nombre}
                                </td>
                                <td>
                                    {Apellido}
                                </td>
                                <td>
                                    {DepartamentoView}
                                </td>
                                <td>
                                    {MunicipioView}
                                </td>
                                <td>
                                    {Correo}
                                </td>
                                <td>
                                    {SexoView}
                                </td>
                                <td>
                                    {FechaNacimiento}
                                </td>
                                <td>
                                    {Imagen}
                                </td>

                                <td>
                                    <button class="btn btn-block btn-danger" type="button" onclick={retirar}>Retirar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button if={data.length > 0} type="button" class="btn btn-success" onclick={almacenar}>Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var self = this;
        self.ready = false;
        self.carreras = [];
        self.carreras2 = [];
        self.data = [];
//
        getDepartamentos();
        getMunicipios();
//
        retirar(e){
            var item = e.item;
            var index = self.data.indexOf(item);
            self.data.splice(index, 1);
        }
//

cambiar(){

    var variable = $('#carrera').val();
    $.ajax({
        url: base + '/api/v13/employees/obtenermunic',
        type: 'POST',
        dataType: 'JSON',
        data: {variable: variable},
        success: function(data){
        var munic = $('#municipio').empty();
        $.each(data, function(index, val) {
        var data_area = '<option>' + val.nombre + '</option>';
        munic.append(data_area);
       });
      },
   });
 }

agregar() {
            var nombre = document.getElementById('nombre'),
                apellido = document.getElementById('apellido'),
                carrera = document.getElementById('carrera'),
                departamento = document.getElementById('carrera'),
                municipio = document.getElementById('municipio'),
                correo = document.getElementById('correo'),
                sexo = document.getElementById('sexo'),
                nacimiento = document.getElementById('nacimiento');

            var alumno = {
                Nombre: nombre.value,
                Apellido: apellido.value,
                Carrera_id: carrera.value,
                Departamento: departamento.value,
                DepartamentoView: departamento.options[departamento.selectedIndex].text,
                Municipio: municipio.value,
                MunicipioView: municipio.options[municipio.selectedIndex].text,
                Correo: correo.value,
                Sexo: sexo.value,
                SexoView: sexo.options[sexo.selectedIndex].text,
                FechaNacimiento: nacimiento.value,



            };

            nombre.value = '';
            apellido.value = '';
            correo.value = '';
            nacimiento.value = '';
            departamento.value = 1;
            carrera.value = 1;
            sexo.value = 1;

            self.data.push(alumno);
        }

        almacenar(){
            console.log(self.data);
        $.ajax({
        url: base + '/api/v13/employees/crear',
        type: 'POST',
        dataType: 'JSON',
        data: {variable: self.data},
        success: function(data){

      },
   });
  }
     function getDepartamentos() {
            $.post('/api/v13/employees/obtenerdepto', function(r) {
                self.carreras = r;
                self.update();
            }, 'json')
        }

        function getMunicipios(){
            $.post('/api/v13/employees/obtenermunic', function(t) {
                console.log(t);
                self.update();
            }, 'json')
        }

        this.on('mount', function() {
            $("#user-modal-tag").modal();
        })
    </script>

</user-modal-insert>