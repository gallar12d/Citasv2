@extends('admin.template.main4')

@section('title', 'Lista de Empresas')

@section('content')


<div class = 'container'>
 <div class="clearfix"></div>
            <br>
            <form method = 'get' action = 'http://localhost:8000/empresa'>
                <button class = 'btn btn-primary'>Empresa Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>


                    <tr>
                        <td>
                            <b><i>nombre : </i></b>
                        </td>
                        <td>{{$empresa->nombre}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>direccion : </i></b>
                        </td>
                        <td>{{$empresa->direccion}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>ruc : </i></b>
                        </td>
                        <td>{{$empresa->ruc}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>correo : </i></b>
                        </td>
                        <td>{{$empresa->correo}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>telefono : </i></b>
                        </td>
                        <td>{{$empresa->telefono}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>imagen : </i></b>
                        </td>
                        <td>{{$empresa->imagen}}</td>
                    </tr>



                </tbody>
            </table>
        </div>

@stop