@extends('layout.layout')
@section('bodypart')



<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="title-breadcrumb">
                    <h2>Product</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Product</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->

  <!-- start all-services-section -->
  <section class="all-services-section section-padding">
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
                <div class="services-grids">
                    @foreach ($alldata as $item)
                    <div class="grid">
                          
                            <div class="img-overlay">
                                <img src="{{asset('product_img/'.$item->img)}}" alt>
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="details">
                                <h3>{{$item->product}}</h3>
                                <p>{{$item->description}}</p>
                                <div class="read-more">
                                    <a href="{{url('productpage/'.$item->id)}}">Read More</a>
                                </div>
                            </div>
                     
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end all-services-section -->

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