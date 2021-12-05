@extends('Admin.layouts.app')

@section('content')
<div id="main">
    @section('navbar')
    @parent
    @endsection
    @section('sidebar')
    @parent
    @endsection
    @section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-icon">
                    <a href="{{ url('/')}}">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active">
                    <a>Dashboard</a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->
    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <!-- Dashboard Tiles -->
        <div class="row mb10">
         
        </div>
      
    </section>
    @endsection
    <!-- End: Content-Wrapper -->
    @section('js')
  
    @endsection
</div>
@endsection