<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


     <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{ URL::asset('assets/logos/favicon.ico')}}" rel="icon">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    
    <link href="{{ URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ URL::asset('assets/global/css/components-md.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/layouts/layout2/css/themes/dark.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/spin.css') }}" rel="stylesheet" type="text/css" />
    
    <link rel="shortcut icon" href="" />
    
    
        
    <script src="{{ URL::asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
    
    @include('template.partials.header')

    @yield('content')
    
     

    
    <script src="{{ URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
       
    <script src="{{ URL::asset('assets/departure.js') }}" type="text/javascript"></script>

    

</body>
</html>