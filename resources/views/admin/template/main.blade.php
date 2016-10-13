<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')| Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
 	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/example.css') }}">



</head>
<body>
	@include('admin.template.partials.nav')

	<section>
		@include('flash::message')
		@yield('content')
	</section>

<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script type="text/javascript">
$('select2').material_select();
</script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script type="text/javascript" src = "/js/AjaxisMaterialize.js"></script>
<script type="text/javascript" src = "/js/scaffold-interface-js/customA.js"></script>



</body>
</html>