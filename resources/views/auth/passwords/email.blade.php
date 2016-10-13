<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Restablecer Contraseña</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i>Recuperar Contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
      <script src="{{ asset('plugins3/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('plugins3/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins3/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('plugins3/js/scripts.js') }}"></script>
         
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>