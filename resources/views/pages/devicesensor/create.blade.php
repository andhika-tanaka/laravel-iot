@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Device Sensor <small>Adding New Device</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form class="form-horizontal form-label-left" action="{{route('deviceSensor.store')}}" method="post" data-parsley-validate>
                    @csrf
                    <span class="section">Device Sensor Info</span>

                    <!-- Device -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="devices">
                         Device
                        </label>
                        <div class="col-md-6 col-sm-6" id="devices">
                            <select name="device" class="selectpicker form-control" data-live-search="true" >
                                <option>=====Select One====</option>
                                @foreach ($devices as $device)
                                <option value="{{$device->id}}">{{$device->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Sensor -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="sensors">
                        Sensor
                        </label>
                        <div class="col-md-6 col-sm-6" id="sensors">
                            <select name="sensor" class="selectpicker form-control" data-live-search="true" >
                                <option>=====Select One====</option>
                                @foreach ($sensors as $sensor)
                                <option value="{{$sensor->id}}">{{$sensor->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-primary" href="{{route('device.index')}}">Cancel</a>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection