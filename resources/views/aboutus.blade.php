@extends('layout.layout')
@section('bodypart')



<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="title-breadcrumb">
                    <h2>About Company</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>About Company</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start about-section-s3 -->
<section class="about-section-s3 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="about-img">
                    <img src="assets/images/about-s3-pic.jpg" alt>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="about-text">
                    <div class="title">
                        <span>About Us</span>
                        <h2>We Build Everything</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="signature">
                        <img src="assets/images/signature.png" alt>
                    </div>
                </div>

                <div class="fun-fact">
                    <div class="fun-fact-grids start-count">
                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-1.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="1200">00</span><span>+</span>
                            </h3>
                            <p>projects</p>
                        </div>

                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-2.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="400">00</span><span>+</span>
                            </h3>
                            <p>Factories</p>
                        </div>

                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-3.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="1000">00</span><span>+</span>
                            </h3>
                            <p>Employees</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end about-section-s3 -->

<!-- start cta-section-s2 -->
<section class="cta-section-s2">
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
<!-- end cta-section-s2 -->



@endsection