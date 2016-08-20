var elixir = require('laravel-elixir');
var gulp = require("gulp");
var bower = require("gulp-bower");

gulp.task('bower', function () {
    return bower();
});
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 */
var vendors = '../../assets/vendors/';


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir(function (mix) {

    // Run bower install
    mix.task('bower');

    //copy admin and frontend skins to public
    mix.copy('resources/assets/css/custom_css/skins', 'public/assets/css/custom_css/skins');
    mix.copy('resources/assets/css/frontend/skins', 'public/assets/css/frontend/skins');

    // json data for bootstrap tables
    mix.copy('resources/assets/json', 'public/assets/json');
    
    //copy admin style switcher to public
    mix.copy('resources/assets/js/custom_js/style-switcher.js', 'public/assets/js/custom_js');

    // Copy fonts straight to public
    mix.copy('resources/assets/vendors/bootstrap/fonts', 'public/assets/fonts');
    mix.copy('resources/assets/vendors/font-awesome/fonts', 'public/assets/fonts');
    mix.copy('resources/assets/vendors/ionicons/fonts', 'public/assets/fonts');

    // Copy images straight to public
    mix.copy('resources/assets/vendors/jquery-ui/themes/base/images', 'public/assets/img');
    mix.copy('resources/assets/img', 'public/assets/img');
    mix.copy('resources/assets/images', 'public/assets/images');

    // datatables
    mix.copy('resources/assets/vendors/datatables.net/js/jquery.dataTables.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.css', 'public/assets/vendors/datatables/css');
    mix.copy('resources/assets/vendors/datatables.net-buttons/js/buttons.print.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-buttons/js/dataTables.buttons.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.css', 'public/assets/vendors/datatables/css');
    mix.copy('resources/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-colreorder/js/dataTables.colReorder.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-colreorder-bs/css/colReorder.bootstrap.css', 'public/assets/vendors/datatables/css');
    mix.copy('resources/assets/vendors/datatables.net-responsive/js/dataTables.responsive.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-rowreorder/js/dataTables.rowReorder.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-buttons/js/buttons.html5.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-buttons/js/buttons.colVis.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-buttons/js/buttons.print.min.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-rowreorder-bs/css/rowReorder.bootstrap.css', 'public/assets/vendors/datatables/css');
    mix.copy('resources/assets/vendors/datatables.net-scroller/js/dataTables.scroller.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.css', 'public/assets/vendors/datatables/css');
    mix.copy('resources/assets/vendors/pdfmake/build/pdfmake.js', 'public/assets/vendors/datatables/js');
    mix.copy('resources/assets/vendors/pdfmake/build/vfs_fonts.js', 'public/assets/vendors/datatables/js');


    mix.copy('resources/assets/css/custom_css/tables.css', 'public/assets/css/custom_css');

    //icheck
    mix.copy('resources/assets/vendors/iCheck/icheck.js','public/assets/vendors/iCheck/js');
    mix.copy('resources/assets/vendors/iCheck/skins','public/assets/vendors/iCheck/css');

    //jasny-bootstrap
    mix.copy('resources/assets/vendors/jasny-bootstrap/dist/css/jasny-bootstrap.css', 'public/assets/vendors/jasny-bootstrap/css');
    mix.copy('resources/assets/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.js', 'public/assets/vendors/jasny-bootstrap/js');

    //select2
    mix.copy('resources/assets/vendors/select2/dist/css/select2.min.css', 'public/assets/vendors/select2/css');
    mix.copy('resources/assets/vendors/select2/dist/js/select2.js', 'public/assets/vendors/select2/js');
    mix.copy('resources/assets/vendors/select2-bootstrap-theme/dist/select2-bootstrap.css', 'public/assets/vendors/select2/css');


    // x-editable
    mix.copy('resources/assets/vendors/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 'public/assets/vendors/x-editable/css');
    mix.copy('resources/assets/vendors/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js', 'public/assets/vendors/x-editable/js');
    mix.copy('resources/assets/vendors/x-editable/dist/bootstrap3-editable/img', 'public/assets/vendors/x-editable/img');
    mix.copy('resources/assets/vendors/x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js', 'public/assets/vendors/x-editable/js');
    mix.copy('resources/assets/vendors/x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css', 'public/assets/vendors/x-editable/css');
    mix.copy('resources/assets/vendors/x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js', 'public/assets/vendors/x-editable/js');
    mix.copy('resources/assets/vendors/x-editable/dist/inputs-ext/address/address.js', 'public/assets/vendors/x-editable/js');

    // x-editable page
    mix.copy('resources/assets/css/custom_css/inlinedit.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/x-editable.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/demo.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/demo-mock.js', 'public/assets/js/custom_js');

    // jquery-mockjax
    mix.copy('resources/assets/vendors/jquery-mockjax/dist/jquery.mockjax.js', 'public/assets/vendors/jquery-mockjax/js');

    // owl-carousel
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.carousel.css', 'public/assets/vendors/owl.carousel/css');
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.theme.css', 'public/assets/vendors/owl.carousel/css');
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.transitions.css', 'public/assets/vendors/owl.carousel/css');
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.carousel.min.js', 'public/assets/vendors/owl.carousel/js');

    // bootstrapvalidator
    mix.copy('resources/assets/vendors/bootstrapvalidator/dist/css/bootstrapValidator.min.css', 'public/assets/vendors/bootstrapvalidator/css');
    mix.copy('resources/assets/vendors/bootstrapvalidator/dist/js/bootstrapValidator.min.js', 'public/assets/vendors/bootstrapvalidator/js');

    // vertical-timeline
    mix.copy('resources/assets/vendors/vertical-timeline/css/reset.css', 'public/assets/vendors/vertical-timeline/css');
    mix.copy('resources/assets/vendors/vertical-timeline/css/style.css', 'public/assets/vendors/vertical-timeline/css');
    mix.copy('resources/assets/vendors/vertical-timeline/js/main.js', 'public/assets/vendors/vertical-timeline/js');
    mix.copy('resources/assets/vendors/vertical-timeline/js/modernizr.js', 'public/assets/vendors/vertical-timeline/js');
    mix.copy('resources/assets/css/custom_css/timeline.css', 'public/assets/css/custom_css');

    //create user page
    mix.copy('resources/assets/css/custom_css/addnew_user.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/addnew_user.js', 'public/assets/js/custom_js');

    // edit user page
    mix.copy('resources/assets/js/custom_js/edit_user.js', 'public/assets/js/custom_js');

    //advanced tables
    mix.copy('resources/assets/css/custom_css/addnew_user.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/advanced_datatables.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/css/custom_css/addnew_user.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/datatables.js', 'public/assets/js/custom_js');

    //hover
    mix.copy('resources/assets/vendors/hover/css/hover.css', 'public/assets/vendors/hover/css/');

    // Buttons
    mix.copy('resources/assets/vendors/Buttons/css/buttons.css', 'public/assets/vendors/Buttons/css');
    mix.copy('resources/assets/vendors/Buttons/js/buttons.js', 'public/assets/vendors/Buttons/js');
    mix.copy('resources/assets/js/custom_js/button_main.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/css/custom_css/advbuttons.css', 'public/assets/css/custom_css');

    // moment
    mix.copy('resources/assets/vendors/moment/min/moment.min.js', 'public/assets/vendors/moment/js');

    // fullcalendar
    mix.copy('resources/assets/vendors/fullcalendar/dist/fullcalendar.css','public/assets/vendors/fullcalendar/css');
    mix.copy('resources/assets/vendors/fullcalendar/dist/fullcalendar.print.css','public/assets/vendors/fullcalendar/css');
    mix.copy('resources/assets/vendors/fullcalendar/dist/fullcalendar.min.js','public/assets/vendors/fullcalendar/js');

    //calendar page
    mix.copy('resources/assets/css/custom_css/calendar_custom.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/calendar.js', 'public/assets/js/custom_js');
    // show user profile page
    mix.copy('resources/assets/css/custom_css/profile.css', 'public/assets/css/custom_css');

    // summernote
    mix.copy('resources/assets/vendors/summernote/dist/summernote.css', 'public/assets/vendors/summernote/css');
    mix.copy('resources/assets/vendors/summernote/dist/summernote.min.js', 'public/assets/vendors/summernote/js');

    // bootstrap-tagsinput
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/assets/vendors/bootstrap-tagsinput/css');
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.js', 'public/assets/vendors/bootstrap-tagsinput/js');


    // blog create page
    mix.copy('resources/assets/css/custom_css/blog.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/add_newblog.js', 'public/assets/js/custom_js');


    // flot chart
    mix.copy('resources/assets/vendors/flotchart/jquery.flot.js', 'public/assets/vendors/flotchart/js');
    mix.copy('resources/assets/vendors/flotchart/jquery.flot.resize.js', 'public/assets/vendors/flotchart/js');
    mix.copy('resources/assets/vendors/flotchart/jquery.flot.stack.js', 'public/assets/vendors/flotchart/js');
    mix.copy('resources/assets/vendors/flotchart/jquery.flot.time.js', 'public/assets/vendors/flotchart/js');
    mix.copy('resources/assets/vendors/flotchart/jquery.flot.categories.js', 'public/assets/vendors/flotchart/js');
    mix.copy('resources/assets/vendors/flotchart/jquery.flot.pie.js', 'public/assets/vendors/flotchart/js');
    mix.copy('resources/assets/js/jquery.flot.spline.js', 'public/assets/vendors/splinecharts');

    //flot.tooltip
    mix.copy('resources/assets/vendors/flot.tooltip/js/jquery.flot.tooltip.js', 'public/assets/vendors/flot.tooltip/js');


    // flot chart page
    mix.copy('resources/assets/css/custom_css/flot_charts.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/flot_charts.js', 'public/assets/js/custom_js');

    // Chart.js
    mix.copy('resources/assets/vendors/Chart.js/dist/Chart.js','public/assets/vendors/Chart.js/js');
    mix.copy('resources/assets/css/custom_css/chartjs-charts.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/chartjs-charts.js', 'public/assets/js/custom_js');

    // general components page
    mix.copy('resources/assets/css/custom_css/alertmessage.css', 'public/assets/css/custom_css');

    // login page
    mix.copy('resources/assets/css/chandra_bootstrap.css', 'public/assets/css/bootstrap.min.css');
    mix.copy('resources/assets/css/font-awesome.min.css', 'public/assets/css');
    mix.copy('resources/assets/css/custom_css/login.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/jquery-1.11.1.min.js', 'public/assets/js');
    mix.copy('resources/assets/js/bootstrap.min.js', 'public/assets/js');

    // daterange picker
    mix.copy('resources/assets/vendors/bootstrap-daterangepicker/daterangepicker.js', 'public/assets/vendors/daterangepicker/js');
    mix.copy('resources/assets/vendors/bootstrap-daterangepicker/daterangepicker.css', 'public/assets/vendors/daterangepicker/css');

    // bootstrap-datetimepicker
    mix.copy('resources/assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 'public/assets/vendors/datetimepicker/css');
    mix.copy('resources/assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'public/assets/vendors/datetimepicker/js');
    mix.copy('resources/assets/vendors/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js', 'public/assets/vendors/datetimepicker/js');

    //select2
    mix.copy('resources/assets/vendors/select2/dist/css/select2.css', 'public/assets/vendors/select2/css');
    mix.copy('resources/assets/vendors/select2/dist/js/select2.js', 'public/assets/vendors/select2/js');
    mix.copy('resources/assets/vendors/select2-bootstrap-theme/dist/select2-bootstrap.css', 'public/assets/vendors/select2/css');

    // clockpicker
    mix.copy('resources/assets/vendors/clockpicker/dist/bootstrap-clockpicker.css', 'public/assets/vendors/clockpicker/css');
    mix.copy('resources/assets/vendors/clockpicker/dist/bootstrap-clockpicker.js', 'public/assets/vendors/clockpicker/js');

    // bootstrap-fileinput
    mix.copy('resources/assets/vendors/bootstrap-fileinput/css/fileinput.css', 'public/assets/vendors/bootstrap-fileinput/css');
    mix.copy('resources/assets/vendors/bootstrap-fileinput/js/fileinput.js', 'public/assets/vendors/bootstrap-fileinput/js');
    mix.copy('resources/assets/vendors/bootstrap-fileinput/img/loading.gif', 'public/assets/vendors/bootstrap-fileinput/img');

    // bootstrap-file-input
    mix.copy('resources/assets/vendors/bootstrap-file-input/bootstrap.file-input.js', 'public/assets/vendors/bootstrap-file-input');


    //jquery input-mask
    mix.copy('resources/assets/vendors/jquery.inputmask/dist/', 'public/assets/vendors/jquery.inputmask/');

    // bootstrap-maxlength
    mix.copy('resources/assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js', 'public/assets/vendors/bootstrap-maxlength/js');

    // bootstrap-datetimepicker
    mix.copy('resources/assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 'public/assets/vendors/datetimepicker/css');
    mix.copy('resources/assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'public/assets/vendors/datetimepicker/js');
    mix.copy('resources/assets/vendors/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js', 'public/assets/vendors/datetimepicker/js');

    // form elements page
    mix.copy('resources/assets/js/custom_js/form_elements.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/css/custom_css/form_elements.css', 'public/assets/css/custom_css');

    // bootstrap3-wysihtml5-bower
    mix.copy('resources/assets/vendors/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css', 'public/assets/vendors/bootstrap3-wysihtml5-bower/css');
    mix.copy('resources/assets/vendors/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js', 'public/assets/vendors/bootstrap3-wysihtml5-bower/js');
    mix.copy('resources/assets/vendors/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.js', 'public/assets/vendors/bootstrap3-wysihtml5-bower/js');
    mix.copy('resources/assets/vendors/bootstrap3-wysihtml5-bower/dist/amd/wysihtml5.js', 'public/assets/vendors/bootstrap3-wysihtml5-bower/js');

    // ckeditor
    mix.copy('resources/assets/vendors/ckeditor/ckeditor.js', 'public/assets/vendors/ckeditor/js');
    mix.copy('resources/assets/vendors/ckeditor/adapters/jquery.js', 'public/assets/vendors/ckeditor/js');
    mix.copy('resources/assets/vendors/ckeditor/config.js', 'public/assets/vendors/ckeditor/js');
    mix.copy('resources/assets/vendors/ckeditor/skins/', 'public/assets/vendors/ckeditor/js/skins');
    mix.copy('resources/assets/vendors/ckeditor/lang', 'public/assets/vendors/ckeditor/js/lang');
    mix.copy('resources/assets/vendors/ckeditor/styles.js', 'public/assets/vendors/ckeditor/js');
    mix.copy('resources/assets/vendors/ckeditor/contents.css', 'public/assets/vendors/ckeditor/js');

    // form editor page
    mix.copy('resources/assets/js/custom_js/form_editors.js', 'public/assets/js/custom_js');

    // form validation
    mix.copy('resources/assets/css/custom_css/form2.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/css/custom_css/form3.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/form1.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/form2.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/form3.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/form_validations.js', 'public/assets/js/custom_js');

    // twitter-bootstrap-wizard
    mix.copy('resources/assets/vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js', 'public/assets/vendors/bootstrapwizard');

    // form wizard
    mix.copy('resources/assets/css/custom_css/form_wizard.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/form_wizards.js', 'public/assets/js/custom_js');

    // clockface
    mix.copy('resources/assets/vendors/clockface.js/css/clockface.css', 'public/assets/vendors/clockface/css');
    mix.copy('resources/assets/vendors/clockface.js/js/clockface.js', 'public/assets/vendors/clockface/js');

    // bootstrap color picker
    mix.copy('resources/assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css', 'public/assets/vendors/colorpicker/css');
    mix.copy('resources/assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js', 'public/assets/vendors/colorpicker/js');
    mix.copy('resources/assets/vendors/mjolnic-bootstrap-colorpicker/dist/img/bootstrap-colorpicker', 'public/assets/vendors/colorpicker/img/bootstrap-colorpicker');

    // bootstrap touchspin
    mix.copy('resources/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css', 'public/assets/vendors/bootstrap-touchspin/css');
    mix.copy('resources/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js', 'public/assets/vendors/bootstrap-touchspin/js');

    // bootstrap multiselect
    mix.copy('resources/assets/vendors/bootstrap-multiselect/dist/css/bootstrap-multiselect.css', 'public/assets/vendors/bootstrap-multiselect/css');
    mix.copy('resources/assets/vendors/bootstrap-multiselect/dist/js/bootstrap-multiselect.js', 'public/assets/vendors/bootstrap-multiselect/js');

    // bootstrap switch
    mix.copy('resources/assets/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css', 'public/assets/vendors/bootstrap-switch/css');
    mix.copy('resources/assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js', 'public/assets/vendors/bootstrap-switch/js');

    // pickers page
    mix.copy('resources/assets/js/custom_js/pickers.js', 'public/assets/js/custom_js');

    // flippant
    mix.copy('resources/assets/vendors/flippant/flippant.css', 'public/assets/vendors/flippant/css');
    mix.copy('resources/assets/vendors/flippant/flippant.js', 'public/assets/vendors/flippant/js');

    // panels page
    mix.copy('resources/assets/js/custom_js/panel-flip.js', 'public/assets/js/custom_js');

    // tab and accordions
    mix.copy('resources/assets/css/custom_css/tab.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/tabs_accordions.js', 'public/assets/js/custom_js');

    // font icons page
    mix.copy('resources/assets/css/custom_css/icon.css', 'public/assets/css/custom_css');

    // bootstrap tagsinput
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/assets/vendors/bootstrap-tagsinput/css');
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/examples/assets/app.css', 'public/assets/vendors/bootstrap-tagsinput/css');
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/examples/assets/app_bs3.js', 'public/assets/vendors/bootstrap-tagsinput/js');
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.js', 'public/assets/vendors/bootstrap-tagsinput/js');

    // toastr
    mix.copy('resources/assets/vendors/toastr/toastr.css', 'public/assets/vendors/toastr/css');
    mix.copy('resources/assets/vendors/toastr/toastr.min.js', 'public/assets/vendors/toastr/js');

    // toastr page
    mix.copy('resources/assets/css/custom_css/toastr.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/toastr.js', 'public/assets/js/custom_js');

    // session_timeout page
    mix.copy('resources/assets/css/custom_css/session_timeout.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/session-timeout.js', 'public/assets/js/custom_js');

    // jquery.sessionTimeout
    mix.copy('resources/assets/js/jquery.sessionTimeout.min.js', 'public/assets/js');

    // animate
    mix.copy('resources/assets/vendors/animate.css/animate.min.css', 'public/assets/vendors/animate');
    // wow
    mix.copy('resources/assets/vendors/wow/dist/wow.min.js', 'public/assets/vendors/wow/js');

    // transitions page
    mix.copy('resources/assets/css/custom_css/transitions.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/transitions.js', 'public/assets/js/custom_js');

    // knob
    mix.copy('resources/assets/vendors/jquery-knob/js/jquery.knob.js', 'public/assets/vendors/jquery-knob/js');

    // circle-slider page
    mix.copy('resources/assets/js/custom_js/circle-slider.js', 'public/assets/js/custom_js');

    // create_table page
    mix.copy('resources/assets/css/custom_css/create_table.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/create_table.js', 'public/assets/js/custom_js');

    // cropper
    mix.copy('resources/assets/vendors/cropper/dist/cropper.min.js', 'public/assets/vendors/cropper/js');
    mix.copy('resources/assets/vendors/cropper/dist/cropper.min.css', 'public/assets/vendors/cropper/css');

    // image cropping page
    mix.copy('resources/assets/css/custom_css/crop.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/crop.js', 'public/assets/js/custom_js');

    // simple-table page
    mix.copy('resources/assets/js/custom_js/simple-table.js', 'public/assets/js/custom_js');

    // mailbox page
    mix.copy('resources/assets/css/custom_css/mail.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/mail.js', 'public/assets/js/custom_js');

    // task page
    mix.copy('resources/assets/css/custom_css/task.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/task.js', 'public/assets/js/custom_js');

    // Sortable
    mix.copy('resources/assets/vendors/Sortable/st/app.js', 'public/assets/vendors/Sortable/js');
    mix.copy('resources/assets/vendors/Sortable/Sortable.js', 'public/assets/vendors/Sortable/js');
    mix.copy('resources/assets/css/custom_css/sortable_list.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/sortable_list.js', 'public/assets/js/custom_js');

    //fancybox
    mix.copy('resources/assets/vendors/fancybox/source', 'public/assets/vendors/fancybox');
    mix.copy('resources/assets/vendors/fancybox/lib/jquery.mousewheel-3.0.6.pack.js', 'public/assets/vendors/fancybox');

    // mixitup
    mix.copy('resources/assets/vendors/mixitup/src/jquery.mixitup.js', 'public/assets/vendors/mixitup');

    // gallery page
    mix.copy('resources/assets/css/custom_css/gallery.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/gallery.js', 'public/assets/js/custom_js');

    // masonry-gallery
    mix.copy('resources/assets/js/custom_js/masonry-gallery.js', 'public/assets/js/custom_js');

    // jquery file upload
    mix.copy('resources/assets/vendors/blueimp-file-upload/css/jquery.fileupload.css', 'public/assets/vendors/blueimp-file-upload/css');
    mix.copy('resources/assets/vendors/blueimp-file-upload/css/jquery.fileupload-ui.css', 'public/assets/vendors/blueimp-file-upload/css');
    mix.copy('resources/assets/vendors/blueimp-file-upload/css/jquery.fileupload-noscript.css', 'public/assets/vendors/blueimp-file-upload/css');
    mix.copy('resources/assets/vendors/blueimp-file-upload/css/jquery.fileupload-ui-noscript.css', 'public/assets/vendors/blueimp-file-upload/css');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/vendor/jquery.ui.widget.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.iframe-transport.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload-process.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload-image.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload-audio.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload-video.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload-validate.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/js/jquery.fileupload-ui.js', 'public/assets/vendors/blueimp-file-upload/js');
    mix.copy('resources/assets/vendors/blueimp-file-upload/img/loading.gif', 'public/assets/vendors/blueimp-file-upload/img');
    mix.copy('resources/assets/js/main.js', 'public/assets/vendors/blueimp-file-upload/js');

    // blueimp-gallery-with-desc
    mix.copy('resources/assets/vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css', 'public/assets/vendors/blueimp-gallery-with-desc/css');
    mix.copy('resources/assets/vendors/blueimp-gallery-with-desc/js/jquery.blueimp-gallery.min.js', 'public/assets/vendors/blueimp-gallery-with-desc/js');

    // dropzone
    mix.copy('resources/assets/vendors/dropzone/dist/dropzone.css', 'public/assets/vendors/dropzone/css');
    mix.copy('resources/assets/vendors/dropzone/dist/dropzone.js', 'public/assets/vendors/dropzone/js');

    // masonary gallery
    mix.copy('resources/assets/css/animated-masonry-gallery.css', 'public/assets/vendors/masonry-gallery/css');
    mix.copy('resources/assets/js/animated-masonry-gallery.js', 'public/assets/vendors/masonry-gallery/js');
    mix.copy('resources/assets/js/jquery.isotope.min.js', 'public/assets/vendors/masonry-gallery/js');

    // blueimp-tmpl
    mix.copy('resources/assets/vendors/blueimp-tmpl/js/tmpl.min.js', 'public/assets/vendors/blueimp-tmpl/js');

    // blueimp-load-image
    mix.copy('resources/assets/vendors/blueimp-load-image/js/load-image.all.min.js', 'public/assets/vendors/blueimp-load-image/js');
    mix.copy('resources/assets/vendors/blueimp-load-image/js/load-image.js', 'public/assets/vendors/blueimp-load-image/js');

    // blueimp-canvas-to-blob
    mix.copy('resources/assets/vendors/blueimp-canvas-to-blob/js/canvas-to-blob.min.js', 'public/assets/vendors/blueimp-canvas-to-blob/js');

    //imgmagnify
    mix.copy('resources/assets/vendors/bootstrap-magnify/css/bootstrap-magnify.css', 'public/assets/vendors/bootstrap-magnify');
    mix.copy('resources/assets/vendors/bootstrap-magnify/js/bootstrap-magnify.js', 'public/assets/vendors/bootstrap-magnify');

    // gmaps
    mix.copy('resources/assets/vendors/gmaps/examples/examples.css','public/assets/vendors/gmaps/css');
    mix.copy('resources/assets/vendors/gmaps/gmaps.min.js','public/assets/vendors/gmaps/js');
    mix.copy('resources/assets/css/custom_css/custom_map.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/custommaps.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/maps_api.js', 'public/assets/js/custom_js');

    //jvector map
    mix.copy('resources/assets/vendors/jqvmap/dist/jqvmap.css', 'public/assets/vendors/jqvmap/css');
    mix.copy('resources/assets/vendors/jqvmap/dist/jquery.vmap.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/vendors/jqvmap/dist/maps/jquery.vmap.usa.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/vendors/jqvmap/dist/maps/jquery.vmap.europe.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/vendors/jqvmap/dist/maps/jquery.vmap.germany.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/vendors/jqvmap/dist/maps/jquery.vmap.russia.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js', 'public/assets/vendors/jqvmap/js');
    mix.copy('resources/assets/js/custom_js/vector-maps.js', 'public/assets/js/custom_js');

    // faq page
    mix.copy('resources/assets/css/custom_css/faq.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/faq.js', 'public/assets/js/custom_js');

    // lockscreen page
    mix.copy('resources/assets/css/custom_css/lockscreen.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/lockscreen.js', 'public/assets/js/custom_js');

    // invoice page
    mix.copy('resources/assets/css/custom_css/invoice.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/invoice.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/metisMenu.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/app.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/style-switcher.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/rightside_bar.js', 'public/assets/js/custom_js');

    // bootstrap-datepicker
    mix.copy('resources/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.js','public/assets/vendors/bootstrap-datepicker/js');
    mix.copy('resources/assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker.css','public/assets/vendors/bootstrap-datepicker/css');

    // register page
    mix.copy('resources/assets/js/custom_js/register.js', 'public/assets/js/custom_js');
    
    //login page
    mix.copy('resources/assets/js/custom_js/login.js', 'public/assets/js/custom_js');

    mix.copy('resources/assets/js/jquery.min.js', 'public/assets/js');

    // 404 page
    mix.copy('resources/assets/css/custom_css/404.css', 'public/assets/css/custom_css');

    // boxed page(layouts)
    mix.copy('resources/assets/css/custom_css/chandra.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/css/custom_css/metisMenu.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/css/custom_css/panel.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/vendors/jquery-ui/jquery-ui.min.js','public/assets/vendors/jquery-ui/js');
    mix.copy('resources/assets/js/custom_js/rightside_bar.js', 'public/assets/js/custom_js');

    //nvd3charts page
    mix.copy('resources/assets/vendors/nvd3/build/nv.d3.js', 'public/assets/vendors/nvd3/js');
    mix.copy('resources/assets/vendors/nvd3/build/nv.d3.css', 'public/assets/vendors/nvd3/css');
    mix.copy('resources/assets/vendors/d3/d3.js', 'public/assets/vendors/d3/js');
    mix.copy('resources/assets/js/custom_js/stream_layers.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/css/custom_css/nvd3_charts.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/nvd3_charts.js', 'public/assets/js/custom_js');

    //dragable portlet page
    mix.copy('resources/assets/css/custom_css/portlet.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/portlets.js', 'public/assets/js/custom_js');

    //typeahead
    mix.copy('resources/assets/vendors/typeahead.js/dist/bloodhound.min.js','public/assets/vendors/typeahead.js/js');
    mix.copy('resources/assets/vendors/typeahead.js/dist/typeahead.bundle.min.js','public/assets/vendors/typeahead.js/js');

    // bootstrap tagsinput
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/assets/vendors/bootstrap-tagsinput/css');
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/examples/assets/app.css', 'public/assets/vendors/bootstrap-tagsinput/css');
    mix.copy('resources/assets/js/tags_data/app_bs3.js', 'public/assets/js/tags_data');
    mix.copy('resources/assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.js', 'public/assets/vendors/bootstrap-tagsinput/js');
    mix.copy('resources/assets/js/tags_data/cities.json', 'public/assets/js/tags_data');
    mix.copy('resources/assets/js/tags_data/citynames.json', 'public/assets/js/tags_data');

    //nestable list page
    mix.copy('resources/assets/vendors/nestable-list/jquery.nestable.js', 'public/assets/vendors/nestable-list');
    mix.copy('resources/assets/css/custom_css/nestable_list.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/custom_js/nestable.js', 'public/assets/js/custom_js');

    //  bower-jvectormap
    mix.copy('resources/assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css', 'public/assets/vendors/bower-jvectormap/css');
    mix.copy('resources/assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/assets/vendors/bower-jvectormap/js');
    mix.copy('resources/assets/vendors/bower-jvectormap/jquery-jvectormap-world-mill-en.js', 'public/assets/vendors/bower-jvectormap/js');

    // QuickNote-jQuery-Plugin
    mix.copy('resources/assets/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.css', 'public/assets/vendors/QuickNote-jQuery-Plugin');
    mix.copy('resources/assets/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.js', 'public/assets/vendors/QuickNote-jQuery-Plugin');

    // dashboard ( index page )
    mix.copy('resources/assets/css/custom_css/dashboard.css', 'public/assets/css/custom_css');
    mix.copy('resources/assets/js/jquery.sparkline.js', 'public/assets/vendors/sparklinecharts');
    mix.copy('resources/assets/js/custom_js/dashboard.js', 'public/assets/js/custom_js');

    // hover
    mix.copy('resources/assets/vendors/hover/css/hover.css', 'public/assets/vendors/hover');

    // front end
    // owl-carousel
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.carousel.css', 'public/assets/vendors/owl.carousel/css');
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.theme.css', 'public/assets/vendors/owl.carousel/css');
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.transitions.css', 'public/assets/vendors/owl.carousel/css');
    mix.copy('resources/assets/vendors/owl.carousel/owl-carousel/owl.carousel.js', 'public/assets/vendors/owl.carousel/js');

    // ihover
    mix.copy('resources/assets/vendors/ihover/src/ihover.min.css', 'public/assets/vendors/ihover');

    // frontend index page
    mix.copy('resources/assets/css/frontend/styles.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/scrollview.js', 'public/assets/js/frontend');
    mix.copy('resources/assets/js/frontend/index.js', 'public/assets/js/frontend');

    // frontend default page
    mix.copy('resources/assets/css/frontend/custom.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/style-switcher.js', 'public/assets/js/frontend');
    mix.copy('resources/assets/js/frontend/chandra.js', 'public/assets/js/frontend');

    // aboutus page
    mix.copy('resources/assets/css/frontend/aboutus.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/aboutus.js', 'public/assets/js/frontend');

    // bootstrap progressbar
    mix.copy('resources/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css', 'public/assets/vendors/bootstrap-progressbar/css');
    mix.copy('resources/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.js', 'public/assets/vendors/bootstrap-progressbar/js');

    // timeline page
    mix.copy('resources/assets/css/frontend/timeline.css', 'public/assets/css/frontend');

    // 404 page
    mix.copy('resources/assets/css/frontend/404.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/jquery.min.js', 'public/assets/js/frontend');
    

    // 500 page
    mix.copy('resources/assets/css/frontend/500.css', 'public/assets/css/frontend');

    // features page
    mix.copy('resources/assets/css/frontend/features.css', 'public/assets/css/frontend');

    // adv features
    mix.copy('resources/assets/css/frontend/panel.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/advfeatures.js', 'public/assets/js/frontend');

    // flippant
    mix.copy('resources/assets/vendors/flippant/flippant.css', 'public/assets/vendors/flippant');

    // grid page
    mix.copy('resources/assets/js/frontend/grid.js', 'public/assets/js/frontend');

    // portfolio page
    mix.copy('resources/assets/css/frontend/portfolio.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/portfolio.js', 'public/assets/js/frontend');

    // bxslider
    mix.copy('resources/assets/vendors/bxslider-4/dist/jquery.bxslider.css', 'public/assets/vendors/bxslider');
    mix.copy('resources/assets/vendors/bxslider-4/dist/jquery.bxslider.min.js', 'public/assets/vendors/bxslider');
    mix.copy('resources/assets/vendors/bxslider-4/dist/images', 'public/assets/vendors/bxslider/images');

    // portfolio_item
    mix.copy('resources/assets/js/frontend/portfolio_item.js', 'public/assets/js/frontend');

    // price page
    mix.copy('resources/assets/css/frontend/price.css', 'public/assets/css/frontend');

    // blog
    mix.copy('resources/assets/css/frontend/blog.css', 'public/assets/css/frontend');

    // contact page
    mix.copy('resources/assets/css/frontend/contact.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/gmap.js', 'public/assets/js/frontend');

    // user_account page
    mix.copy('resources/assets/css/frontend/user_account.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/user_account.js', 'public/assets/js/frontend');

    // holderjs
    mix.copy('resources/assets/vendors/holderjs/holder.min.js', 'public/assets/vendors/holderjs');

    // login page
    mix.copy('resources/assets/css/frontend/login.css', 'public/assets/css/frontend');
    mix.copy('resources/assets/js/frontend/register.js', 'public/assets/js/frontend');

    // compose page
    mix.copy('resources/assets/js/custom_js/compose.js', 'public/assets/js/custom_js');


    // bootstrap table
    mix.copy('resources/assets/vendors/bootstrap-table/dist/bootstrap-table.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/bootstrap-table.min.css', 'public/assets/vendors/bootstrap-table/css');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/multiple-sort/bootstrap-table-multiple-sort.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/reorder-rows/bootstrap-table-reorder-rows.css', 'public/assets/vendors/bootstrap-table/css');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/reorder-rows/bootstrap-table-reorder-rows.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/multiple-sort/bootstrap-table-multiple-sort.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/toolbar/bootstrap-table-toolbar.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/editable/bootstrap-table-editable.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/tableExport.jquery.plugin/tableExport.min.js', 'public/assets/vendors/bootstrap-table/js');
    mix.copy('resources/assets/vendors/TableDnD/dist/jquery.tablednd.js', 'public/assets/vendors/TableDnD/js');

    // bootstrap table page
    mix.copy('resources/assets/js/custom_js/bs-advtable.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/bs-editable.js', 'public/assets/js/custom_js');
    mix.copy('resources/assets/js/custom_js/bstable.js', 'public/assets/js/custom_js');


    // register page
    mix.copy('resources/assets/css/frontend/register.css', 'public/assets/css/frontend');

    //form builder
    mix.copy('resources/assets/vendors/form-builder/css/codemirror.css', 'public/assets/vendors/form-builder/css');
    mix.copy('resources/assets/vendors/form-builder/css/form_builder.css', 'public/assets/vendors/form-builder/css');
    mix.copy('resources/assets/vendors/form-builder/js/codemirror.min.js', 'public/assets/vendors/form-builder/js');
    mix.copy('resources/assets/vendors/form-builder/js/form_builder.min.js', 'public/assets/vendors/form-builder/js');
    mix.copy('resources/assets/vendors/form-builder/js/formatting.js', 'public/assets/vendors/form-builder/js');

    // form layout
    mix.copy('resources/assets/css/custom_css/form_layouts.css', 'public/assets/css/custom_css');
    
    // Custom Styles
    mix.styles(
        [
            'chandra_bootstrap.css', '../vendors/font-awesome/css/font-awesome.min.css','custom_css/chandra.css','custom_css/metisMenu.css','custom_css/panel.css'
        ], 'public/assets/css/lib.css');
    // all global js files into lib.js
    mix.scripts(
        [
            'jquery-1.11.1.min.js',
            '../vendors/jquery-ui/jquery-ui.min.js',
            '../vendors/bootstrap/dist/js/bootstrap.min.js',
            'custom_js/metisMenu.js',
            'custom_js/app.js'
        ], 'public/assets/js/lib.js');


    // front-end global css and js
    // all global css files into front_lib.js
    mix.styles(
        [
            'chandra_bootstrap.css', '../vendors/font-awesome/css/font-awesome.min.css','frontend/custom.css'
        ], 'public/assets/css/front_lib.css');

    // all global js files into front_lib.js
    mix.scripts(
        [
            'jquery-1.11.1.min.js',
            '../vendors/bootstrap/dist/js/bootstrap.min.js',
            'frontend/chandra.js'
        ], 'public/assets/js/frontend/front_lib.js');
});
