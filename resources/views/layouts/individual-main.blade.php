<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        @yield('page-title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="The World needs all the good we can do" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{  asset('assets/css/all-admin.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('page-stylesheets')
</head>

<body data-topbar="dark" data-layout="horizontal">
    <!--G0 Top-->
    <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
    <!--End Go Top-->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="gradient-panel"></div>
        @include('layouts.partial-views.header')
        
        @include('layouts.partial-views.mobile.navbar')
        @include('layouts.partial-views.navbar')
        
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            @yield('page-content')
            <!-- End Page-content -->
            @include('layouts.partial-views.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/waves.min.js') }}"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="{{ asset('assets/vendor/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>

    <!-- select 2 plugin -->
    <script src="{{ asset('assets/vendor/libs/select2/js/select2.min.js') }}"></script>

    <!-- dropzone plugin -->
    <script src="{{ asset('assets/vendor/libs/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Summernote js -->
    <script src="{{ asset('assets/vendor/libs/summernote/summernote-bs4.min.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('assets/vendor/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/js/pages/start-a-campaign.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    @yield('page-scripts')
</body>
</html>