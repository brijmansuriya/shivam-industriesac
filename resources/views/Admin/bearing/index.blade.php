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
        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="{{ url('/') }}">
                            <span class="glyphicon glyphicon-home fs14"></span>
                        </a>
                    </li>
                    <li class="crumb-active">Bearing</li>
                </ol>
            </div>
            <div class="topbar-right">
                <a href="{{ url('admin/bearing/add') }}" class="btn btn-default btn-sm light fw600 ml10">
                    <span class="fa fa-plus pr5"></span>Add</a>
            </div>
        </header>
        <section id="content" class="animated fadeIn">
            <div class="row p5 pt15">
                <div class="col-lg-12">
                    <div class="panel panel-visible" id="spy3">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Bearing
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="w20">#</th>
                                        <th>Vehicle Name</th>
                                        <th>Bearing Name</th>
                                        <th class="w20">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                $i = 0;
                                foreach ($alldata as $post) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $post->vehicle_name ?></td>
                                        <td><?= $post->bearing_name ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/bearing/add') }}/{{ $post->id }}"
                                                    class="btn btn-warning btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-danger btn-xs"
                                                    onclick="deleteConfirmation({{ $post->id }})">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</div>
@endsection
@section('js')
<script>
    function deleteConfirmation(id) {
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Records!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = "{{ url('admin/bearing/delete') }}" + '/' + id;
                } else {
                    swal({
                        title: "Cancelled",
                        text: "Your Records are safe :)",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                }
            });
    }
</script>
<script>
    $('#datatable').dataTable({
        dom: 'Blfrtip',
        scrollX: true,
    });
</script>
@endsection
