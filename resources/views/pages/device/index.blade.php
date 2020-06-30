@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Table Device<small>All Device data</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <a class="btn btn-primary" href="{{route('device.create')}}">Add Data</a>
                        </div>
                    </div>
                        <div class="card-box table-responsive">
                            
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>User</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</>
                                </thead>

                                <tbody>
                                    @foreach($datas as $data)
                                    <tr scope="row">
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->user->name}}</td>
                                        <td>{{$data->description}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>
                                            <!--Delete Button-->
                                            <a class="btn btn-primary" href="{{route('device.edit', $data->id)}}"><i class="fa fa-edit"></i></a>
                                            <a class="del-btn btn btn-danger" data-id="{{$data->id}}"><i class="fa fa-trash"></i></a>                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $(".del-btn").click(function(){
            let id = $(this).attr('data-id');
            if(confirm("Are you sure want to delete this data? ")) {
                $.ajax({
                    url : "{{url('/')}}/device/"+id,
                    method : "POST",
                    data : {
                        _token : "{{csrf_token()}}",
                        _method : "DELETE",
                    }
                })
                .then(function(data){
                    location.reload();
                });
            }
        })
    </script>
@endpush