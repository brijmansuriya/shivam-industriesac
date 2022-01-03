@extends('Admin/layouts.app')
@section('content')
<div id="main">
    @section('navbar')
    @parent
    @endsection
    @section('sidebar')
    @parent
    @endsection
    @section('content')
@php 
$val_product='';
$val_description='';
if($id!='' and $id!=0){
   $val_product = $data[0]->product;
   $val_description = $data[0]->description;
}
@endphp
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.php">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active"> Product</li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">

            <form role="form" action="{{ url('admin/product/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                @endif
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Product</span>
                    </div>
                    <div class="panel-body">
                        <input type='hidden' name='id' id='id' value='{{$id}}'>
                        {{editbox('6', 'Product Name', 'product', 'Enter Product Name', $val_product,"required")}}
                        {{uplodes('6', 'Image', 'img',  '')}}
                        {{textareabox('12','Description','description','Enter Description',$val_description,'')}}
                       
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
   
    @endsection
</div>
@endsection
@section('js')

@endsection