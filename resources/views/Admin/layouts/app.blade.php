<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accurate Bearing</title>
    <meta name="author" content="Caprus Digital">
    <meta name="theme-color" content="#14c3a0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ URL::asset('siteadmin/assets/img/logos/fevicon.png') }}">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('siteadmin/assets/skin/default_skin/css/theme.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('siteadmin/assets/admin-tools/admin-forms/css/admin-forms.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('siteadmin/assets/admin-tools/admin-forms/css/custom.css') }}">
    <!-- <link rel="shortcut icon" href="{{ URL::asset('siteadmin/assets/img/logos/fevicon.png') }}"> -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('siteadmin/vendor/plugins/datatables/media/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('siteadmin/vendor/plugins/select2/css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('siteadmin/assets/js/sweetalert.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('siteadmin/css/castom.css') }}">
    @yield('css')
</head>

<body class="dashboard-page sb-r-c onload-check mobile-view sb-l-disable-animation tray-rescale">
    <!-- Start: Main -->
    <div id="main">
        <header class="navbar navbar-fixed-top bg-primary">
            <div class="navbar-branding">
                <a class="navbar-brand" href="">
                    <b>Accurate Bearing</b>
                </a>
                <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs">
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="ad ad-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
          
        </header>
        <aside id="sidebar_left" class="nano nano-primary affix has-scrollbar">
            <div class="sidebar-left-content nano-content">
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li>
                        <a href="{{ URL('admin/') }}">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('admin/category') }}">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="sidebar-title">Category</span>
                        </a>
                    </li>

                </ul>
            </div>
        </aside>
        <!-- Start: Content-Wrapper -->
        <section id='content_wrapper'>
            @yield('content')

            <footer id="content-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <span class="footer-legal">© <?= date('Y') ?> Accurate Bearing</span>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="#content" class="footer-return-top">
                            <span class="fa fa-arrow-up"></span>
                        </a>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <!-- End: Main -->
    <!-- jQuery -->

    <script src="{{ URL::asset('siteadmin/vendor/jquery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/vendor/jquery/jquery_migrate/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/vendor/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/assets/js/utility/utility.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/assets/js/demo/demo.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/vendor/chart-dist/utils.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/vendor/plugins/datatables/media/js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('siteadmin/vendor/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('siteadmin/includes/js/custom.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('siteadmin/js/custom.js') }}">

    @yield('js')
</body>

</html>
