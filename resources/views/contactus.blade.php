@extends('layout.layout')
@section('bodypart')
       <!-- start page-title -->
       <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->    


        <!-- start contact-pg-contact-section -->  
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-sm-8">
                        <div class="contact-form">
                            <form class="row contact-validation-active"  id="contact-form-s2">
                                <div class="col col-sm-6">
                                    <label for="f-name">First Name</label>
                                    <input type="text" class="form-control" id="f-name" name="f_name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="l-name">Last Name</label>
                                    <input type="text" class="form-control" id="l-name" name="l_name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-xs-12">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="note" class="form-control"></textarea>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="submit-btn">
                                        <button type="submit" class="theme-btn-s2">Submit</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-sm-4">
                        <div class="contact-info">
                            <h3>Drop us a line</h3>
                            <p>For any kind of query, contact us with the details below.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> +91 9016241851</li>
                                <li><i class="fa fa-envelope"></i> accuratebearing@gmail.com</li>
                                <li><i class="fa fa-home"></i> Survey No.171/1,Plot No.39/B, B/H Shree Vallabh Forge NR. Santidham, SIDC Road end, Veraval-Shapar Rajkot</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->

@endsection