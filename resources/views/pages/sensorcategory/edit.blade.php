@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Sensor Category <small>Edit Sensor Category Data</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form class="form-horizontal form-label-left" action="{{route('sensorCategory.update', $sensorCategory->id)}}" method="POST" data-parsley-validate>
                    @csrf
                    @method('PUT')
                    <span class="section">Sensor Category Info</span>

                    <!-- Name -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name *</label>
                        <div class="col-md-6 col-sm-6">
                            <input id="name" class="form-control" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="60" data-parsley-minlength-message="You need to enter at least 2 caracters for the name" name="name" placeholder="Temperature" required="required" type="text">
                        </div>
                    </div>

                    <!-- Unit -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="unit">Unit *</label>
                        <div class="col-md-6 col-sm-6">
                            <input id="unit" class="form-control" data-parsley-trigger="change" data-parsley-minlength="1" data-parsley-maxlength="10" data-parsley-minlength-message="You need to enter at least 1 caracters for the unit" name="unit" placeholder="C" required="required" type="text">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-primary" href="{{route('sensorCategory.index')}}">Cancel</a>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection