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
$val_cat_name='';
$val_cat_img='';
$val_description='';
if($id!='' and $id!=0){
   $val_cat_name = $data[0]->cat_name;
   $val_cat_img = $data[0]->cat_img;
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
                <li class="crumb-active"> Country</li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">

            <form role="form" action="{{ url('admin/category/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                @endif
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Country</span>
                    </div>
                    <div class="panel-body">
                        <input type='hidden' name='id' id='id' value='{{$id}}'>
                        {{editbox('6', 'Country Name', 'cat_name', 'Enter Country Name', $val_cat_name,"")}}
                        {{uplodes('6', 'image', 'cat_img',  '')}}
                        {{textareabox('12','Description','description','Enter Description',$val_description,'')}}
                        @if($val_cat_img!='')
                        <img src="{{asset('cat_img/'.$val_cat_img.'')}}" class="w100" alt="">
                        @endif
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
<script>

    $(".select2-multiple").select2({
        placeholder: "Select a Document",
        allowClear: true
    });
</script>
@endsection