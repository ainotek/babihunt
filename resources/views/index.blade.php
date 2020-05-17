<!DOCTYPE html>
<html lang="{{'fr'}}">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard 1 | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <!-- C3 Chart css -->
        <link href="{{asset('assets/libs/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- TopBar Start -->
        @include('layouts.topbar')
        <!-- end TopBar -->
            <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.sidebar')
        <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- Right Sidebar -->
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <!--C3 Chart-->
        <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
        <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>
        <script src="{{asset('assets/libs/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
    </body>
</html>
