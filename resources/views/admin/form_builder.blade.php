@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')Form Builder @parent
@stop

@section('header_styles')
        <!--page level css -->
<link href="{{ asset('assets/vendors/form-builder/css/codemirror.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendors/form-builder/css/form_builder.css')}}" rel="stylesheet">
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
            <a href="#">Forms</a>
        </li>
        <li>
            Form Builder
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!--main content-->
    <!-- /.box -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i>
                        Form Builder
                    </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="modal fade" id="options_modal" tabindex="-1" role="dialog" aria-labelledby="options_modal_label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="options_modal_label">Options</h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="save_options">Save changes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-offset-1 col-sm-10 col-md-10">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <h1>Form builder</h1>
                                    <hr>
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#editor-tab" data-toggle="tab">Editor</a></li>
                                            <li><a href="#source-tab" data-toggle="tab">Source</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="editor-tab">
                                                <form id="content" class="form-horizontal">
                                                    <fieldset id="content_form_name">
                                                        <legend>Form name</legend>
                                                    </fieldset>
                                                </form>
                                            </div>

                                            <div class="tab-pane" id="source-tab">
                                                <textarea id="source"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <h1>Components</h1>
                                    <hr>
                                    <div id="components-container" class="form-horizontal">
                                        <div class="component form-group" data-type="text">
                                            <label class="control-label col-sm-4" for="text_input">Text input</label>
                                            <div class="controls col-sm-8">
                                                <input type="text" name="" id="text_input" placeholder="placeholder" class="form-control">
                                            </div>
                                        </div>

                                        <div class="component form-group" data-type="textarea">
                                            <label class="control-label col-sm-4" for="textarea">Text area</label>
                                            <div class="controls col-sm-8">
                                                <textarea name="" class="form-control" id="textarea" placeholder="placeholder"></textarea>
                                            </div>
                                        </div>

                                        <div class="component form-group" data-type="select_basic">
                                            <label class="control-label col-sm-4" for="select_basic">Select - Basic</label>
                                            <div class="controls col-sm-8">
                                                <select class="form-control" name="" id="select_basic">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="component form-group" data-type="select_multiple">
                                            <label class="control-label col-sm-4" for="select_multiple">Select - Multiple</label>
                                            <div class="controls col-sm-8">
                                                <select name="" class="form-control" id="select_multiple" multiple="multiple" size="3">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="component form-group" data-type="checkbox">
                                            <label class="control-label col-sm-4">Checkboxes</label>
                                            <div class="controls col-sm-8">
                                                <div class="checkbox"><label class="" for="checkbox_1">
                                                        <input type="checkbox" name="checkbox" id="checkbox_1">
                                                        Option 1
                                                    </label></div>
                                                <div class="checkbox"><label class="" for="checkbox_2">
                                                        <input type="checkbox" name="checkbox" id="checkbox_2">
                                                        Option 2
                                                    </label></div>
                                                <div class="checkbox"><label class="" for="checkbox_3">
                                                        <input type="checkbox" name="checkbox" id="checkbox_3">
                                                        Option 3
                                                    </label></div>
                                            </div>
                                        </div>

                                        <div class="component form-group" data-type="radio">
                                            <label class="control-label col-sm-4">Radio buttons</label>
                                            <div class="controls col-sm-8">
                                                <div class="radio"><label class="" for="radio_1">
                                                        <input type="radio" name="radio" id="radio_1">
                                                        Option 1
                                                    </label></div>
                                                <div class="radio"><label class="" for="radio_2">
                                                        <input type="radio" name="radio" id="radio_2">
                                                        Option 2
                                                    </label></div>
                                                <div class="radio"><label class="" for="radio_3">
                                                        <input type="radio" name="radio" id="radio_3">
                                                        Option 3
                                                    </label></div>
                                            </div>
                                        </div>

                                        <div class="component form-group" data-type="static_text">
                                            <label class="control-label col-sm-4">Static text</label>
                                            <div class="controls col-sm-8">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>

                                        <div class="form-actions component" data-type="submit">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-default" onclick="javascript:window.history.back();">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--main content ends--> </section>
@stop

        <!-- ./wrapper -->
@section('footer_scripts')
        <!-- begining of page level js -->
<script src="{{ asset('assets/vendors/form-builder/js/codemirror.min.js')}}"></script>
<script src="{{ asset('assets/vendors/form-builder/js/form_builder.min.js')}}"></script>
<script src="{{ asset('assets/vendors/form-builder/js/formatting.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
@stop