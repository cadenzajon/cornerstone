<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register | Welcome to Chandra Frontend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- end of global css-->
    <!-- page level styles-->

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/iCheck/css/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}">
    <link href="{{ asset('assets/css/frontend/register.css') }}" rel="stylesheet">
    <!-- end of page level styles-->
</head>
<body>
<div class="container">
    <div class="row wow zoomInUp" data-wow-duration="2s">
        <div class="box animated fadeInDown">
            <h2 class="text-center text-primary"><img src="{{ asset('assets/images/logo3.png') }}"><br>Chandra</h2>
            <h4 class="text-primary"><strong>Sign Up</strong></h4>
            <!-- Notifications -->
            @include('notifications')
            @if($errors->has())
                @foreach ($errors->all() as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form action="{{ route('register') }}" method="POST">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label for="username"> First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                           value="{!! old('first_name') !!}" required>
                </div>
                <div class="form-group">
                    <label for="username"> Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                           value="{!! old('last_name') !!}" required>
                </div>
                <div class="form-group">
                    <label for="Email"> Email</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
                           value="{!! old('Email') !!}" required>
                </div>
                <div class="form-group">
                    <label for="Password1"> Password</label>
                    <input type="password" class="form-control" id="Password1" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Password2"> Confirm Password</label>
                    <input type="password" class="form-control" id="Password2" name="password_confirm" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="subscribed" >  I accept <a href="#"> Terms and Conditions</a>
                    </label>
                </div>
                <input type="submit" class="btn btn-block btn-primary" value="Sign up" name="submit">
                Have account already? Please go to <a href="{{ route('login') }}"> Log In</a>
            </form>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/register.js') }}"></script>
<!-- end of global js -->
</body>
</html>