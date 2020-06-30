@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Sensor Category <small>Adding New Sensor Category</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form class="form-horizontal form-label-left" action="{{route('sensor.store')}}" method="post" data-parsley-validate>
                    @csrf
                    <span class="section">Sensor Info</span>

                    <!-- Name -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name *</label>
                        <div class="col-md-6 col-sm-6">
                            <input id="name" class="form-control" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="60" data-parsley-minlength-message="You need to enter at least 2 caracters for the name" name="name" placeholder="Sensor Name" required="required" type="text">
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="categories">
                         Category
                        </label>
                        <div class="col-md-6 col-sm-6" id="categories">
                            <select name="category" class="selectpicker form-control" data-live-search="true">
                                <option>=====Select One====</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}} - {{$category->unit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description *</label>
                        <div class="col-md-6 col-sm-6">
                            <input id="description" class="form-control" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="60" data-parsley-minlength-message="You need to enter at least 2 caracters for the description" name="description" placeholder="Description" required="required" type="text">
                        </div>
                    </div>

                    <!-- Qty -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="qty">Qty *</label>
                        <div class="col-md-6 col-sm-6">
                            <input id="qty" class="form-control" name="qty" placeholder="Sensor Qty" required="required" type="number">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-primary" href="{{route('sensor.index')}}">Cancel</a>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection