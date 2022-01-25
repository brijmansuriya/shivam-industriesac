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
            <div class="col col-md-12">
                <div class="about-text">
                    <div class="about-title">
                        <span>About Our Company</span>
                        <h2>We provide full range of Premium Industrial Services for your business</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="theme-btn-s2">Read More</a>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end about-section-s2 -->
<section class="cta-section-s2">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="cta-text">
                    <h3>We provide innovative Product Solutions for sustainable progress.</h3>
                    <a href="{{ url('/contactus')}}" class="theme-btn-s2">Contact Us</a>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>

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
                        <div class="img-overlay" style="width: 150px;height: 100px;">
                            <img src="{{asset('product_img/'.$item->img)}}" alt="" style="width: 150px;height: 100px;">
                        </div>
                        <div class="details" style="width: 150px;height: 100px;">
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

<!-- start cta-section -->

<!-- end cta-section -->

<!-- start partners-section-s2 -->

<!-- end partners-section-s2 -->

<!-- end news-letter-section -->

@endsection