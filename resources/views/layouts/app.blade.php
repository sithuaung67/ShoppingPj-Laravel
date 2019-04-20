<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Scripts -->
    <!-- script src="{{ asset('js/app.js') }}" defer></script> -->
    <!--     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
 -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('bootstrap4/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('fa/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTable.css')}}" rel="stylesheet">
<body>
    <div id="app">

@include('layouts.nav_bar')
        <main class="py-3">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('bootstrap4/js/jQuery.js')}}"></script>
    <script src="{{asset('bootstrap4/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/JqueryDataTable.js')}}"></script>
    <script src="{{asset('js/BootstrapDataTable.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').dataTable();
    } );
</script>
</body>
</html>
