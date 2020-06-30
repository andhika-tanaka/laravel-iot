@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form User <small>Adding New User</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form class="form-horizontal form-label-left" action="{{route('user.store')}}" method="post" data-parsley-validate>
                    @csrf
                    <span class="section">Personal Info</span>

                    <!-- Name -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name *</label>
                        <div class="col-md-6 col-sm-6">
                            <input id="name" class="form-control" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="60" data-parsley-minlength-message="You need to enter at least 2 caracters for the first name" name="name" placeholder="Name e.g Jon Doe" required="required" type="text">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email *</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" id="email" data-parsley-trigger="change" name="email" required="required" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password *</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="password" id="password" name="password" required="required" data-parsley-trigger="change" data-parsley-minlength="8" data-parsley-maxlength="60" data-parsley-minlength-message="You need to enter at least 2 caracters for password" placeholder="Password" class="form-control">
                        </div>
                    </div>

                    <!-- Repeat Password-->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password2">Repeat Password *</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="password" id="password2" name="password2" required="required" data-parsley-trigger="change" data-parsley-equalto="#password" data-parsley-equalto-message="Password should be the same" placeholder="Password" class="form-control">
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address *</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" id="address" name="address" required="required" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="60" data-parsley-minlength-message="You need to enter at least 2 caracters for the street name" placeholder="Address" class="form-control">
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone_number">Phone Number*</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="tel" id="phone_number" name="phone_number" required="required" data-parsley-trigger="change" data-parsley-minlength="8" data-parsley-maxlength="20" data-parsley-minlength-message="You need to enter at least 8 digits of your telephone number" placeholder="Phone" class="form-control">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-primary" href="{{route('user.index')}}">Cancel</a>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection