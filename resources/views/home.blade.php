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
                        <h2>Industries Served</h2>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="services-grids services-slider-s2">
                        <div class="grid">
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-1.png')}}" alt></div>
                                    <h3>Mechanical Engineering</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-2.png')}}" alt></div>
                                    <h3>Automobile Services</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-3.png')}}" alt></div>
                                    <h3>Bridge Construction</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-4.png')}}" alt></div>
                                    <h3>Steel Industry</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-5.png')}}" alt></div>
                                    <h3>Knitwear Products</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-6.png')}}" alt></div>
                                    <h3>Timber Production</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-1.png')}}" alt></div>
                                    <h3>Mechanical Engineering</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-2.png')}}" alt></div>
                                    <h3>Automobile Services</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-3.png')}}" alt></div>
                                    <h3>Bridge Construction</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-4.png')}}" alt></div>
                                    <h3>Steel Industry</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-5.png')}}" alt></div>
                                    <h3>Knitwear Products</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="service-title">
                                    <div class="icon"><img src="{{asset('frontend/assets/images/services/icon-6.png')}}" alt></div>
                                    <h3>Timber Production</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                <div class="more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <p class="view-all-services"> Click here to view <a href="#">All Services <i class="fa fa-long-arrow-right"></i></a></p>
                </div>
            </div>                
        </div> <!-- end container -->
    </section>
    <!-- end services-section-s2 -->


    <!-- start features-section -->
    <section class="features-section">
        <div class="content">
            <div class="features-grids">
                <div class="grid">
                    <div class="img-holder">
                        <img src="{{asset('frontend/assets/images/features/img-1.jpg')}}" alt>
                    </div>
                    <div class="details">
                        <h3>Custom Tube Bending &amp; <br> Forming</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="img-holder">
                        <img src="{{asset('frontend/assets/images/features/img-2.jpg')}}" alt>
                    </div>
                    <div class="details">
                        <h3>Specialty Metal Fabrication <br> Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="img-holder">
                        <img src="{{asset('frontend/assets/images/features/img-3.jpg')}}" alt>
                    </div>
                    <div class="details">
                        <h3>Country and Nature Friendly <br> Innovations</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features-section -->


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


    <!-- start contact-section -->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="col col-lg-10">
                <div class="row">
                    <div class="col col-lg-4 col-md-4">
                        <div class="section-title-s3">
                            <h2>Request a Quote</h2>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-md-8">
                        <div class="title-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form form">
                    <form method="post" id="contact-form" class="contact-validation-active">
                        <div>
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div>
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div>
                            <label>Business Type</label>
                            <select name="select" class="form-control">
                                <option selected disabled> -- Select One -- </option>
                                <option value="Select One">Select One</option>
                                <option value="Select Two">Select Two</option>
                                <option value="Select Three">Select Three</option>
                            </select>
                        </div>
                        <div class="submit-btn-wrap">
                            <input value="Submit" type="submit">
                            <div id="loader">
                                <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                            </div>
                        </div>
                        <div class="error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>                     
            </div>
        </div> <!-- end container -->
        <div class="contact-man">
            <img src="{{asset('frontend/assets/images/contact-man.png')}}" alt>
        </div>
    </section>
    <!-- end contact-section -->


    <!-- start projects-section -->
    <section class="projects-section section-padding padding-bottom-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title">
                        <h2>Featured Projects</h2>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters">
                        <ul>
                            <li><a data-filter="*" href="#" class="current">All</a></li>
                            <li><a data-filter=".construction" href="#">Construction</a></li>
                            <li><a data-filter=".plant" href="#">Oil Plant</a></li>
                            <li><a data-filter=".mechanical" href="#">Mechanical</a></li>
                            <li><a data-filter=".welding" href="#">Welding</a></li>
                        </ul>
                    </div>

                    <div class="gallery-container">
                        <div class="box construction">
                            <img src="{{asset('frontend/assets/images/projects/img-1.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box construction plant">
                            <img src="{{asset('frontend/assets/images/projects/img-2.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box plant construction">
                            <img src="{{asset('frontend/assets/images/projects/img-3.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box construction mechanical">
                            <img src="{{asset('frontend/assets/images/projects/img-4.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box plant welding">
                            <img src="{{asset('frontend/assets/images/projects/img-5.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box mechanical">
                            <img src="{{asset('frontend/assets/images/projects/img-6.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box construction">
                            <img src="{{asset('frontend/assets/images/projects/img-7.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="box plant welding">
                            <img src="{{asset('frontend/assets/images/projects/img-8.jpg')}}" alt>
                            <div class="details">
                                <div class="info">
                                    <span class="cat">Melbourne, AU</span>
                                    <h3><a href="#">Mechanical Works</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end projects-section -->


    <!-- start fun-fact-section -->
    <section class="fun-fact-section">
        <h2 class="hidden">Fun fact</h2>
        <div class="container">
            <div class="row start-count">
                <div class="col col-md-5 col-xs-4">
                    <div class="grid">
                        <div class="icon">
                            <img src="{{asset('frontend/assets/images/fun-fact/icon-1.png')}}" alt>
                        </div>
                        <h3>
                            <span class="counter" data-count="1200">00</span><span>+</span>
                        </h3>
                        <p>projects</p>
                    </div>
                </div>
                <div class="col col-md-4 col-xs-4">
                    <div class="grid">
                        <div class="icon">
                            <img src="{{asset('frontend/assets/images/fun-fact/icon-2.png')}}" alt>
                        </div>
                        <h3>
                            <span class="counter" data-count="400">00</span><span>+</span>
                        </h3>
                        <p>Factories</p>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-4">
                    <div class="grid">
                        <div class="icon">
                            <img src="{{asset('frontend/assets/images/fun-fact/icon-3.png')}}" alt>
                        </div>
                        <h3>
                            <span class="counter" data-count="1000">00</span><span>+</span>
                        </h3>
                        <p>Employees</p>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact-section -->


    <!-- start testimonials-section-s2 -->
    <section class="testimonials-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-4">
                    <div class="section-title-s2">
                        <h2>Reviews of <br>our clients</h2>
                    </div>
                </div>
                <div class="col col-lg-8 col-md-8">
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite.</p>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-11 col-lg-offset-1">
                    <div class="testimonials-grids testimonials-slider">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/images/testimonials/img-1.jpg')}}" alt>
                            </div>
                            <div class="details">
                                <h3>“Impressive Performance & Productivity”</h3>
                                <span class="client-info">- Daniel Craig, Google</span>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commo di conse quatur.</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/images/testimonials/img-1.jpg')}}" alt>
                            </div>
                            <div class="details">
                                <h3>“Impressive Performance & Productivity”</h3>
                                <span class="client-info">- Daniel Craig, Google</span>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commo di conse quatur.</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end testimonials-section-s2 -->
   

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


    <!-- start news-section-s2 -->
    <section class="news-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title">
                        <h2>Recent News</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="news-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/img-1.jpg')}}" alt>
                            </div>
                            <div class="entry-body">
                                <h3><a href="#">New industrial project set for DFW Airport site</a></h3>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet..</p>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <a href="#">Nov 26</a></li>
                                        <li><i class="fa fa-comments-o"></i> <a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/img-2.jpg')}}" alt>
                            </div>
                            <div class="entry-body">
                                <h3><a href="#">Central Valley Comes Calling with Industrial Options</a></h3>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet..</p>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <a href="#">Nov 26</a></li>
                                        <li><i class="fa fa-comments-o"></i> <a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/img-3.jpg')}}" alt>
                            </div>
                            <div class="entry-body">
                                <h3><a href="#">Columbus' Industrial Market Continues to Rise</a></h3>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet..</p>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <a href="#">Nov 26</a></li>
                                        <li><i class="fa fa-comments-o"></i> <a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col col-xs-12">
                    <div class="more-news">
                        <a href="#" class="theme-btn-s2">More News</a>
                    </div>
                </div>
            </div>            
        </div> <!-- end container -->
    </section>
    <!-- end news-section-s2 -->


    <!-- start partners-section-s2 -->
    <section class="partners-section-s2">
        <h2 class="hidden">Partners</h2>
        <div class="container">
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