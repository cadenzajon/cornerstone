@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Edit User
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/select2/css/select2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/custom_css/addnew_user.css') }}" rel="stylesheet">
@stop


{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit User</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-fw fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li>
                <a href="{{ route('users.edit') }}">Edit User</a>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-edit"></i>
                            Edit user
                        </h3>
                                    <span class="pull-right">
                                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                                    </span>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="position-center">
                            @if($errors->has())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div>
                                <h3 class="text-primary">Personal Information</h3>
                            </div>
                            <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                {!! Form::token() !!}
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Avatar</label>
                                    <div class="col-lg-6">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
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
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="first_name">First Name</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder="first name" name="first_name"
                                                           id="first_name" class="form-control"
                                                           value="{!! old('first_name',$user->first_name) !!}"
                                                           required=""/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="last_name">Last Name</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder="last name" name="last_name"
                                                           id="last_name" class="form-control"
                                                           value="{!! old('last_name',$user->last_name) !!}"
                                                           required=""/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-6">
                                                <h5 class="text-danger"><strong>If you don't want to change password, leave both fields empty</strong></h5>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <label class="col-lg-2 control-label" for="password">Password</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-key text-primary"></i>
                                                                </span>
                                                    <input type="password" name="password" placeholder="" id="password" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="password_confirm">Confirm Password</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-key text-primary"></i>
                                                                </span>
                                                    <input type="password" name="password_confirm" placeholder=" " id="password_confirm" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="email">Email</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-envelope text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder="" id="email" name="email"
                                                           class="form-control"
                                                           value="{!! old('email',$user->email) !!}"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="group" class="col-md-2 control-label">Group</label>
                                            <div class="col-md-6">
                                                <select class="form-control " title="Select group..." name="groups[]" id="groups" required="">
                                                    <option value="">Select</option>
                                                    @foreach($roles as $role)
                                                        <option value="{!! $role->id !!}"{{ (array_key_exists($role->id, $userRoles) ? ' selected="selected"' : '') }}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="activate" class="col-md-2 control-label"> Activate User</label>
                                            <div class="col-md-6">
                                                <input id="activate" name="activate" type="checkbox" class="pos-rel p-l-30" value="1" @if(Activation::completed($user)) checked="checked" @endif {{ ($user->id === Sentinel::getUser()->id ? ' disabled="disabled"' : '') }} />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Gender</label>
                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />
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

                                    </div>
                                </div>

                                <div class="prf-contacts sttng">
                                    <h3 class="text-primary">Contact</h3>
                                </div>
                                <div class="cd-block">
                                    <div class="cd-content">

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Phone </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-phone text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder=" " id="phone" name="phone"
                                                           class="form-control"
                                                           value="{!! old('phone',$user->phone) !!}"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label  col-md-2">Select Country</label>
                                            <div class="col-md-6">
                                                {!! Form::select('country', $countries,old('country',$user->country),array('class' => 'form-control select2', 'id' => 'select2_sample4')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="address">Address</label>
                                            <div class="col-lg-6">
                                                <textarea rows="5" cols="30" class="form-control" id="address"
                                                          name="address"> {!! old('address',$user->address) !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="zip">Zip </label>
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




                                    </div>
                                    <div class="cd-block">
                                        <div class="cd-content">

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-primary">social networks</h3>
                                </div>
                                <div class="cd-block">
                                    <div class="cd-content">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Facebook</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-facebook text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder=" " id="facebook" name="facebook"
                                                           class="form-control"
                                                           value="{!! old('facebook',$user->facebook) !!}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Twitter</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-twitter text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder=" " id="twitter" name="twitter"
                                                           class="form-control"
                                                           value="{!! old('twitter',$user->twitter) !!}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Google plus</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-google-plus text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder=" " id="google_plus"
                                                           name="google_plus" class="form-control"
                                                           value="{!! old('google_plus',$user->google_plus) !!}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Skype</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-skype text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder=" " id="skype" name="skype"
                                                           class="form-control"
                                                           value="{!! old('skype',$user->skype) !!}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Flickr</label>
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
                                            <label class="col-lg-2 control-label">Youtube</label>
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
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <input type="submit" class="btn btn-primary" name="save" value="Update" />
                                                <a href="{{ URL::previous() }}" class="btn btn-default" role="button">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--main content end--> </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/vertical-timeline/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/custom_js/edit_user.js') }}" type="text/javascript"></script>
@stop