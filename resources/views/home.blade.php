@extends('layout.layout')
@section('bodypart')
     <!-- start of hero -->   
     <section class="hero hero-slider-wrapper hero-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="{{asset('frontend/assets/images/slider/slide-2.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                            <h2><span>One Industry</span>All Solution</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">Our Industries</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('frontend/assets/images/slider/slide-1.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                            <h2><span>One Industry</span>All Solution</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">Our Industries</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('frontend/assets/images/slider/slide-3.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                            <h2><span>One Industry</span>All Solution</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">Our Industries</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->


    <!-- start about-section-s2 -->
    <section class="about-section-s2">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="about-text">
                        <div class="about-title">
                            <span>About Our Company</span>
                            <h2>We provide full range of Premium Industrial Services for your business</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="theme-btn-s2">Read More</a>
                    </div>
                </div>
                <div class="col col-md-5 about-video-col-wrap">
                    <div class="about-video-col">
                        <div class="video-holder">
                            <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
                                <i class="fa fa-play"></i> Play Video
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end about-section-s2 -->


    <!-- start services-section-s2 -->
    <section class="services-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-slider">
                        @foreach ($alldata as $item)
                        <div class="grid">
                            <div class="img-overlay">
                                <img src="{{asset('product_img/'.$item->img)}}" alt="">
                            </div>
                            <div class="details">
                                <h3>{{$item->product}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end services-section-s2 -->



    <!-- start team-section -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title">
                        <h2>Our Team</h2>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids team-slider">
                        <div class="grid">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/images/team/img-1.jpg')}}" alt="">
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Malcolm Marshall</h4>
                                <span class="post">Co-Founder</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/images/team/img-2.jpg')}}" alt="">
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Stephen King</h4>
                                <span class="post">Co-Founder</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/images/team/img-3.jpg')}}" alt="">
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Michelle Conroy </h4>
                                <span class="post">Co-Founder</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="{{asset('frontend/assets/images/team/img-1.jpg')}}" alt="">
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Frazer Diamond</h4>
                                <span class="post">Co-Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end team-section -->

    <!-- start cta-section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="cta-text">
                        <h3>We provide innovative Product Solutions for sustainable progress.</h3>
                        <a href="#" class="theme-btn-s2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta-section -->

    <!-- start partners-section-s2 -->
  
    <!-- end partners-section-s2 -->

    <!-- start news-letter-section -->
    <section class="news-letter-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <h3>Subscribe your E-mail for our <span>Newsletter &amp; Business Tips</span></h3>
                </div>
                <div class="col col-md-5">
                    <div class="newsletter-form">
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="email address..">
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end news-letter-section -->

@endsection