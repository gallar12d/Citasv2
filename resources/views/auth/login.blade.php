<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login E.S.E</title>

        <!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins3/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins3/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins3/css/form-elements.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins3/css/style.css') }}">


   <link rel="shortcut icon" href="{{ asset('plugins3/ico/favicon.png') }}">

  <link rel="apple-touch-icon-precomposed" href="{{ asset('plugins3/ico/apple-touch-icon-144-precomposed.png') }}">

 <link rel="apple-touch-icon-precomposed" href="{{ asset('plugins3/ico/apple-touch-icon-114-precomposed.png') }}">

 <link rel="apple-touch-icon-precomposed" href="{{ asset('plugins3/ico/apple-touch-icon-72-precomposed.png') }}">

 <link rel="apple-touch-icon-precomposed" href="{{ asset('plugins3/ico/apple-touch-icon-57-precomposed.png') }}">



    </head>

    <body>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1> <strong>Inicio de Sesión Módulo de Citas Médicas
                        </h1>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Para iniciar la Sesión</h3>
                                <p>Introduzca su correo electronico y contraseña para iniciar sesión:</p>
                            </div>
                            <div class="form-top-right"> <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}
                                <div class="form-group{{ $errors->
                                    has('email') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="form-username">Correo Electronico</label>
                                    <input type="email" name="email" placeholder="Correo electronico" class="form-username form-control" id="form-username" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->
                                    has('password') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="form-password">Contraseña</label>
                                    <input type="password" name="password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">Recuerdame</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn" style="position: relative; left: -45px;">Login!</button>
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


    </div>

        <!-- Javascript -->
        <script src="{{ asset('plugins3/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('plugins3/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins3/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('plugins3/js/scripts.js') }}"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>