<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ asset('images/img/favicon.ico') }}"/>

    <title>Admin Panel</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('bootstrap/css/animate.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet"> -->

  </head>
  <body>
    @yield('content')




    <script src="{{ asset('bootstrap/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>


    <!-- Custom and plugin javascript -->
    <script src="{{ asset('bootstrap/js/inspinia.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.metisMenu.js') }}" charset="utf-8"></script>
    <script src="{{ asset('bootstrap/js/jquery.slimscroll.min.js') }}" charset="utf-8"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </body>
</html>
