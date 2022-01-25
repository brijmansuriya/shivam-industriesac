<header id="header" class="site-header header-style-2">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-sm-6">
                    <div class="office-hour">
                        <!-- <ul>
                            <li><i class="fa fa-clock-o"></i> Monday - friday : 8:00 AM to 7:00 PM</li>
                        </ul> -->
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i> +91 9016241851</li>
                            <li><i class="fa fa-envelope"></i> accuratebearing@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div> <!-- end topbar -->

    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/assets/images/logo-2.png')}}" alt></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="fa fa-close"></i></button>
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('aboutus')}}">About</a></li>
                    <li><a href="{{url('product')}}">Product</a></li>
                    <li><a href="{{url('contactus')}}">Contact</a></li>
                </ul>
                <!-- <ul class="navbar-nav ms-auto">
                 
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul> -->
            </div><!-- end of nav-collapse -->
            <div class="request-quote">
                <a href="#">Catalog</a>
            </div>
        </div><!-- end of container -->
    </nav>
</header>