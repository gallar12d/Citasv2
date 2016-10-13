@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <li>
                    <!--owner-->
                    @if(Entrust::hasRole('admin'))
                        <a href="/admin/user">Manager Users</a>
                    </li>


                    <li>
                        <a href="hola">hola</a>
                    </li>



                    @endif
                    <li>
                        <a href="/admin/user">Manager Posts</a>
                    </li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
