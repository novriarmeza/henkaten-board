<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('csspage')

    <title>@yield('title')</title>
  </head>
  <body>
            <h4 style="color: black; text-align:center; background-color:rgba(197, 197, 197, 0.781); padding-top:6px;padding-bottom:8px; font-weight:bold">HENKATEN BOARD</h4>


        @yield('container')


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/datatable.fixheader.min.js')}}"></script>
    <script src="{{asset('js/datatable.min.js')}}"></script>
    @yield('js')
    @yield('jspagination')
</body>
</html>
