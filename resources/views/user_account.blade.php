@extends('layouts.default')

{{-- Page title --}}
@section('title')
User Account
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/user_account.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css') }}">

@stop

{{-- Page content --}}
@section('content')
    <div class="container">
        <div class="welcome">
            <h3>My Account</h3>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <!--main content-->
                    <div class="position-center">
                        <!-- Notifications -->
                        @include('notifications')

                        <div>
                            <h3 class="text-primary">Personal Information</h3>
                        </div>
                        <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" action="{{ route('my-account') }}" method="post" >
                            {{--{!!  Form::model($user, array('route' => 'my-account', $user->id))  !!}--}}
                            {{--<input type="hidden" name="_token" value="">--}}
                            {!! Form::token() !!}
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Avatar:</label>
                                <div class="col-lg-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
                                            @if($user->pic)
                                                <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"/>
                                            @else
                                                <img src="http://placehold.it/200x150" alt="..." />
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="pic" id="pic" />
                                                            </span>
                                            <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cd-block">
                                <div class="cd-content">
                                    <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            First Name:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " name="first_name" id="u-name"
                                                       class="form-control"
                                                       value="{!! old('first_name',$user->first_name) !!}"></div>
                                            <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                        </div>

                                    </div>

                                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            Last Name:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " name="last_name" id="u-name"
                                                       class="form-control"
                                                       value="{!! old('last_name',$user->last_name) !!}"></div>
                                            <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Email:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-envelope text-primary"></i>
                                                                </span>
                                        <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                               value="{!! old('email',$user->email) !!}"></div>
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <h5 class="text-danger"><strong>If you don't want to change password, leave both fields empty</strong></h5>
                                </div>
                            </div>
                            <div class="cd-block">
                                <div class="cd-content">
                                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            Password:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-key text-primary"></i>
                                            </span>
                                                <input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>
                                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cd-block">
                                <div class="cd-content">
                                    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            Confirm Password:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-key text-primary"></i>
                                            </span>
                                                <input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>
                                            <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Gender: </label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" @if($user->gender == "male") checked="checked" @endif />
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" @if($user->gender == "female") checked="checked" @endif />
                                            Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="other" @if($user->gender === "other") checked="checked" @endif />
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="prf-contacts sttng">
                                <h3 class="text-primary">Contact: </h3>
                            </div>
                            <div class="cd-block">
                                <div class="cd-content">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">
                                            Address:
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea rows="5" cols="30" class="form-control" id="add1"
                                                      name="address">{!! old('address',$user->address) !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="cd-block">
                                        <div class="cd-content">
                                            <div class="form-group">
                                                <label class="control-label  col-md-2">Select Country: </label>
                                                <div class="col-md-6">
                                                    {!! Form::select('country', $countries, $user->country,['class' => 'form-control select2', 'id' => 'countries']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="state">State:</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                                </span>
                                                <input type="text" placeholder=" " id="state" class="form-control"
                                                       name="state" value="{!! old('state',$user->state) !!}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="city">City:</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                                </span>
                                                <input type="text" placeholder=" " id="city" class="form-control"
                                                       name="city" value="{!! old('city',$user->city) !!}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="zip">Zip:</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                                </span>
                                                <input type="text" placeholder=" " id="zip" class="form-control"
                                                       name="zip" value="{!! old('zip',$user->zip) !!}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">
                                            Phone:
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-phone text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " id="phone" name="phone"
                                                       maxlength="10" class="form-control"
                                                       value="{!! old('phone',$user->phone) !!}"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">
                                            DOB:
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar text-primary"></i>
                                            </span>
                                                {!!  Form::text('dob', old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD'))  !!}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <h3 class="text-primary">social networks</h3>
                            </div>
                            <div class="cd-block">
                                <div class="cd-content">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Facebook: </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-facebook text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " id="fb-name" name="facebook"
                                                       class="form-control"
                                                       value="{!! old('facebook',$user->facebook) !!}"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Twitter: </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-twitter text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " id="twitter" name="twitter"
                                                       class="form-control"
                                                       value="{!! old('twitter',$user->twitter) !!}"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Google Plus : </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-google-plus text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " id="g-plus" name="google_plus"
                                                       class="form-control"
                                                       value="{!! old('google_plus',$user->google_plus) !!}"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Skype:</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-skype text-primary"></i>
                                                                </span>
                                                <input type="text" placeholder=" " id="skype" name="skype"
                                                       class="form-control" value="{!! old('skype',$user->skype) !!}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Flickr:</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-flickr text-primary"></i>
                                                                </span>
                                                <input type="text" placeholder=" " id="flickr" name="flickr"
                                                       class="form-control"
                                                       value="{!! old('flickr',$user->flickr) !!}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Youtube:</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-youtube text-primary"></i>
                                                                </span>
                                                <input type="text" placeholder=" " id="youtube" name="youtube"
                                                       class="form-control"
                                                       value="{!! old('youtube',$user->youtube) !!}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"></label>
                                        <div class="col-lg-6">
                                            <label class="checkbox-inline mar-left">
                                                <input type="checkbox" name="subscribed" value="1" class="minimal-red"/>
                                                &nbsp; Send me latest news and updates.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>{{--{!!  Form::close()  !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/holderjs/holder.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/user_account.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

@stop
