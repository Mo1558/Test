<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    
        <!-- Datatables -->
        <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-select/css/select.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css')}}">
        <!-- toastr css -->
        <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">
        <!-- select2 css -->
        <link rel="stylesheet" href="{{ asset('assets/css/select2.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2-bootstrap.min.css')}}" type="text/css">
        <!-- sweetalert -->
        <link rel="stylesheet" href="{{asset('plugins/sweet-alert/sweetalert.css')}}">
    
        @yield('css')
</head>