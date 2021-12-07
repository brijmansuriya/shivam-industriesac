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
$val_vehicle_name='';
$val_cat_id='';
$val_description='';
if($id!='' and $id!=0){
   $val_vehicle_name = $data[0]->vehicle_name;
   $val_cat_id = $data[0]->cat_id;
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
                <li class="crumb-active"> Vehicle</li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">

            <form role="form" action="{{ url('admin/vehicle/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                @endif
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Vehicle</span>
                    </div>
                    <div class="panel-body">
                        <input type='hidden' name='id' id='id' value='{{$id}}'>
                        {{editbox('6', 'Vehicle Name', 'vehicle_name', 'Enter Vehicle Name', $val_vehicle_name,"required")}}
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Cetegory</label>
                                <select class="select2-multiple form-control select-primary" name="cat_id" value="" required>
                                        <option value="">---Select---</option>
                                    @foreach ($category as $row)
                                        <option value="{{$row->id}}" @if($val_cat_id==$row->id) selected @endif>{{$row->cat_name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
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
<script>

    $(".select2-multiple").select2({
        placeholder: "Select a Category",
        allowClear: true
    });
</script>
@endsection