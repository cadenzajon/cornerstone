@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')Create Tables @parent
@stop

{{--page level css --}}

@section('header_styles')
    <link href="{{ asset('assets/css/custom_css/create_table.css')}}" rel="stylesheet" type="text/css"/>
@stop



{{--end of page level css--}}
{{-- Page content --}}
@section('content')
        <section class="content-header">
            <h1>Table Create</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-fw fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li><a href="#">Datatables</a></li>
                <li>
                     Create Table
                </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-bell-o"></i>
                                Create Table
                            </h3>
                                <span class="pull-right">
                                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                                    </span>
                        </div>
                        <div class="panel-body">
                            <form method="post"  role="form" class="form" name="table_gen" id="form_table">
                                <div class="form-group">
                                    <label for="trow" class="control-label">Rows:</label>
                                    <input type="text" class="form-control" name="trow" id="trow" placeholder="Enter number of rows">
                                </div>
                                <div class="form-group">
                                    <label for="tcol" class="control-label">Columns:</label>
                                    <input type="text" class="form-control" name="tcol" id="tcol" placeholder="Enter number of columns">
                                </div>
                                <div class="check">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="bordered" name="bordered" value="bordered"> Bordered
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="stripped" name="stripped" value="stripped"> Stripped
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="condensed" name="condensed" value="condensed"> Condensed
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="form_submit">
                                <input type="reset" name="name" id="reset" class="btn btn-default" value="Reset">
                                <input type="button" name="generate_code" id="generate_code" class="btn btn-success" value="Generate Code">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-success table_view hidden">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-bell-o"></i>
                                Created Table
                            </h3>
                                <span class="pull-right">
                                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                                    </span>
                        </div>
                        <div class="panel-body">
                            <div id="table"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-danger html hidden">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-bell-o"></i>
                                Created Table HTML Code
                            </h3>
                                <span class="pull-right">
                                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                                    </span>
                        </div>
                        <div class="panel-body">
                            <textarea class="form-control" id="html_code" rows="10" data-autoresize></textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{--row--}}
        </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')

<script src="{{ asset('assets/vendors/cropper/js/cropper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/custom_js/create_table.js') }}" type="text/javascript"></script>

@stop