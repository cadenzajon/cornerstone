@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')Bootstrap Responsive Tables @parent
@stop

@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/bootstrap-table/css/bootstrap-table.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendors/bootstrap-table/css/bootstrap-table-reorder-rows.css')}}" type="text/css" rel="stylesheet">
<!--end of page level css-->
@stop

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Basic Tables</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-fw fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Bootstrap Tables</a>
                </li>
                <li>
                    Responsive Tables
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-eye-slash"></i>
                                Show/Hide Columns
                            </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="toolbar1">
                                    <button id="button" class="btn btn-default">showColumn</button>
                                    <button id="button2" class="btn btn-default">hideCoulumn</button>
                                </div>
                                <table id="table1"
                                       data-toggle="table1"
                                       data-toolbar="#toolbar1"
                                       data-height="460"
                                       data-url="../assets/json/data2.json">
                                    <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="first_name">First Name</th>
                                        <th data-field="last_name">Last Name</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="phone">Phone</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-yelp"></i>
                                Reorder Rows
                            </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table"
                                       data-toggle="table"
                                       data-pagination="true"
                                       data-search="true"
                                       data-use-row-attr-func="true"
                                       data-reorderable-rows="true"
                                       data-url="../assets/json/data3.json">
                                    <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="f_name" data-sortable="true">First Name</th>
                                        <th data-field="m_name" data-sortable="true">Middle Price</th>
                                        <th data-field="l_name" data-sortable="true">Last Name</th>
                                        <th data-field="gender" data-sortable="true">Gender</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-tv"></i>
                                ResetView
                            </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="toolbar3">
                                    <button id="button3_1" class="btn btn-default">Large and resetView</button>
                                    <button id="button3_2" class="btn btn-default">Small and resetView</button>
                                </div>
                                <div class="div-table">
                                    <table id="table3"
                                           data-toggle="table3"
                                           data-toolbar="#toolbar3"
                                           data-height="460"
                                           data-url="../assets/json/data2.json">
                                        <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="first_name">UserName</th>
                                            <th data-field="last_name">Full Name</th>
                                            <th data-field="email">Email</th>
                                            <th data-field="phone">Phone</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop

<!-- ./wrapper -->
@section('footer_scripts')
<!-- begining of page level js -->
<script src="{{ asset('assets/vendors/bootstrap-table/js/bootstrap-table.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-table/js/bootstrap-table-multiple-sort.min.js')}}"></script>
<script src="{{ asset('assets/vendors/TableDnD/js/jquery.tablednd.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-table/js/bootstrap-table-reorder-rows.js')}}"></script>
<script src="{{ asset('assets/js/custom_js/bstable.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
@stop