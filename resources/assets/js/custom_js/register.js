$(document).ready(function() {
       
        //Red color scheme for iCheck
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
    $("#dee1").click(function() {

        $("input").iCheck('uncheck');
    });


    });
$("#dob").datetimepicker({
    format: 'YYYY-MM-DD',
    widgetPositioning:{
        vertical:'bottom'
    },
    keepOpen:false,
    maxDate: new Date()
});

$(function() {
        var opts = $("#source").html(),
            opts2 = "<option></option>" + opts;
        $("select.populate").each(function() {
            var e = $(this);
            e.html(e.hasClass("placeholder") ? opts2 : opts);
        });
        $(".examples article:odd").addClass("zebra");
    });
   

    $("#select2_sample4").select2({
        placeholder: "Select a Country",
        allowClear: true,
        formatResult: format,
        formatSelection: format,
        escapeMarkup: function(m) {
            return m;
        }
    });




