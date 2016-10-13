<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default')| Panel de Administración</title>
<link rel="stylesheet" href="{{ asset('proui/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">


</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <section>
        @include('flash::message')
        @yield('content')
    </section>




<script type="text/javascript">
    var base = "{{ url('/') }}";
</script>
<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
 <script src="{{ asset('proui/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('js/roles3.js') }}"></script>
 <script src="{{ asset('js/roles4.js') }}"></script>




</body>
</html>