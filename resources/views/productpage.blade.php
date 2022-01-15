
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


<section class="blog-calassic-main-content section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="blog-grids">
                    <div class="grid">
                        <div class="entry-title-meta">
                            <h3><a href="#">{{$onedata[0]->product}}</a></h3>
                            {{-- <ul class="entry-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i> Feb 21</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                            </ul> --}}
                        </div>
                        <div class="entry-media">
                            <img src="{{asset('product_img/'.$onedata[0]->img)}}" alt="">
                            {{-- <div class="tags">
                                <a href="#">Construction</a>
                            </div> --}}
                        </div>
                        <div class="entry-body">
                            <p>{{$onedata[0]->description}}</p>
                          
                        </div>
                    </div>
                   
                </div>
                                    
            </div>
            
        </div>
    </div> <!-- end container -->
</section>


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