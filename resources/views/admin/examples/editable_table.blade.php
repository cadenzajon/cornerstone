@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Editable Datatables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom_css/tables.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Editable Datatables</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-fw fa-home"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Laravel Examples</a>
                    </li>
                    <li class="active">Editable Datatables</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Second Data Table -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="panel panel-danger table-edit">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <span>
                                    <i class="fa fa-fw fa-edit"></i>
                                    Editable Table</span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div id="sample_editable_1_wrapper" class="">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer sample_editable" id="sample_editable_1" role="grid">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1">ID</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1">Firstname</th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Full Name
                                            : activate to sort column ascending" style="width: 222px;">Lastname</th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Points
                                            : activate to sort column ascending" style="width: 124px;">Points</th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Notes
                                            : activate to sort column ascending" style="width: 152px;">Notes</th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Edit
                                            : activate to sort column ascending" style="width: 88px;">Edit</th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
                                                 Delete
                                            : activate to sort column ascending" style="width: 125px;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}" ></script>
    {{--<script type="text/javascript" src="{{ asset('assets/js/pages/table-editable.js') }}" ></script>--}}

    <script>
        $(function() {
            var nEditing = null;
            var nNew = false;
            var table=$('#sample_editable_1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.editable_datatables.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'username', name: 'username' },
                    { data: 'fullname', name: 'fullname' },
                    { data: 'points', name: 'points' },
                    { data: 'notes', name: 'notes' },
                    { data: 'edit', name: 'edit', orderable: false, searchable: false },
                    { data: 'delete', name: 'delete', orderable: false, searchable: false }
                ]
            });
            table.on( 'draw', function () {
            } );

        function restoreRow(table, nRow) {
            var aData = table.row(nRow).data();
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                table.cell().data(aData[i], nRow, i, false);
            }

            table.draw();
        }

            /*
            Edit functionality
            */

            var row_id,username,fullname,points, notes;
            function editRow(table, nRow) {
                var aData = table.row(nRow).data();
                var jqTds = $('>td', nRow);
                row_id = aData.id?aData.id:'';
                username = aData.username?aData.username:'';
                fullname = aData.fullname?aData.fullname:'';
                points = aData.points?aData.points:'';
                notes = aData.notes?aData.notes:'';


                jqTds[0].innerHTML = row_id;
                jqTds[1].innerHTML = '<input type="text" name="username" id="username" class="form-control input-small" value="' + username + '">';
                jqTds[2].innerHTML = '<input type="text" name="fullname" id="fullname" class="form-control input-small" value="' + fullname + '">';
                jqTds[3].innerHTML = '<input type="text" name="points" id="points" class="form-control input-small" value="' + points + '">';
                jqTds[4].innerHTML = '<input type="text" name="notes" id="notes" class="form-control input-small" value="' + notes + '">';
                jqTds[5].innerHTML = '<a class="edit" href="">Save</a>';
                jqTds[6].innerHTML = '<a class="cancel" href="">Cancel</a>';
            }

            function saveRow(table, nRow) {
            var jqInputs = $('input', nRow);
            username = jqInputs[0].value;
            fullname = jqInputs[1].value;
            points = jqInputs[2].value;
            notes = jqInputs[3].value;



            var tableData = 'username=' + username + '&fullname=' + fullname +
                    '&points=' + points + '&notes=' + notes + '&_token=' + $('meta[name=_token]').attr('content');
            console.log(tableData);

            $.ajax({
                type: "post",
                url: 'editable_datatables/'+row_id+'/update',
                data: tableData,
                success: function (result) {
                    console.log('result is' +result);
                    table.draw(false);
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }

            /*
            Cancel Edit functionality
            */

            function cancelEditRow(table, nRow) {
                var aData = table.row(nRow).data();
                var jqTds = $('>td', nRow);

                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                    table.cell().data(aData[i], nRow, i, false);
                }

                table.draw();
            }

        $('#sample_editable_1_new').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previous row not saved. Do you want to save it ?")) {
                    saveRow(table, nEditing); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    table.deleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;
                    return;
                }
            }

            console.log('adding new row');
            var aiNew = table.row.add(['', '', '', '', '', '']);//.draw(false);
            console.log('new row added');
//            var nRow = table.getNodes(aiNew[0]);
//            editRow(table, aiNew);
//            nEditing = nRow;
//            nNew = true;
        });

            /*
            Delete Functionality
            */
        table.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            var aData = table.row(nRow).data();
            var jqTds = $('>td', nRow);
            var id = aData.id;

            $.ajax({
                type: "get",
                url: 'editable_datatables/'+id+'/delete',
                success: function (result) {
                    console.log('row '+result+' deleted');
                    table.draw(false);
                },
                error: function (result) {
                    console.log(result)
                }
            });
        });

            /*
            When clicked on cancel button
            */
        table.on('click', '.cancel', function (e) {
            e.preventDefault();

            if (nNew) {
                table.row(nEditing).remove().draw(false);
                nNew = false;
            } else {
                restoreRow(table, nEditing);
                nEditing = null;
            }
        });

        table.on('click', '.edit', function (e) {
            e.preventDefault();

            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];
            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                alert('You are already editing a row, you must save or cancel that row before editing a new row');
            } else if (nEditing == nRow && this.innerHTML == "Save") {
                /* Editing this row and want to save it */
                saveRow(table, nEditing);
                nEditing = null;
                //alert("Updated! Do not forget to do some ajax to sync with backend :)");
            } else {
                /* No edit in progress - let's start one */
                editRow(table, nRow);
                nEditing = nRow;
            }
        });
        });
    </script>

@stop
