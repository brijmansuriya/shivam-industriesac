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
$val_bearing_name='';
$val_v_id='';
$val_description='';
if($id!='' and $id!=0){
   $val_bearing_name = $data[0]->bearing_name;
   $val_v_id = $data[0]->v_id;
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
                <li class="crumb-active"> Bearing</li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">

            <form role="form" action="{{ url('admin/bearing/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                @endif
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Bearing</span>
                    </div>
                    <div class="panel-body">
                        <input type='hidden' name='id' id='id' value='{{$id}}'>
                        {{editbox('6', 'Bearing Name', 'bearing_name', 'Enter Bearing Name', $val_bearing_name,"required")}}
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Vehicle Name</label>
                            
                                <select class="select2-multiple form-control select-primary" name="v_id" value="" required>
                                        <option value="">---Select---</option>
                                    @foreach ($vehicle as $row)
                                        <option value="{{$row->id}}" @if($val_v_id==$row->id) selected @endif>{{$row->vehicle_name}}</option>
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