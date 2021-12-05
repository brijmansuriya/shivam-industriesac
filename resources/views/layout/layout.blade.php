<!DOCTYPE html>
<html>
    <head>
        @include('layout.head')
    </head>

    <body>

        <!-- start page-wrapper -->
        <div class="page-wrapper">
    
            <!-- start preloader -->
            <div class="preloader">
                <div class="preloader-inner">
                    <img src="{{asset('frontend/assets/images/preloader.gif')}}" alt>
                </div>
            </div>
            <!-- end preloader -->
            @include('layout.header')
            <!-- Start header -->
           
            <!-- end of header -->
    
            @yield('bodypart')
           
    
            <!-- start site-footer -->
            @include('layout.footer')
            <!-- end site-footer -->
        </div>
        @include('layout.footerjs')
        <!-- end of page-wrapper -->
    </body>
</html>
