$(function() {
        $('#t1').clockface();
    });

    $(function() {
        $('#t3').clockface({
            format: 'H:mm'
        }).clockface('show', '14:30');
    });

    $(function() {
        $('#t2').clockface({
            format: 'HH:mm',
            trigger: 'manual'
        });

        $('#toggle-btn').click(function(e) {
            e.stopPropagation();
            $('#t2').clockface('toggle');
        });
    });
    <!--panel js-->
    $(function() {
        //Colorpicker
        $(".my-colorpicker1").colorpicker();

        $(".my-colorpicker2").colorpicker();

        $(".my-colorpicker3").colorpicker();
        // clock picker

        var input = $('#input-a');
        input.clockpicker({
            autoclose: true
        });

        // Manual operations
        $('#button-a').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
                .clockpicker('toggleView', 'minutes');
        });
        $('#button-b').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
                .clockpicker('toggleView', 'hours');
        });
    });


//datetimepicker


$("#datetime1").datetimepicker().parent().css("position :relative");
$("#datetime2").datetimepicker({
    format: 'LT'
}).parent().css("position :relative");
$("#datetime3").datetimepicker({
    viewMode: 'years'
}).parent().css("position :relative");
$("#datetime4").datetimepicker({
    viewMode: 'years',
    format: 'MM/YYYY'
}).parent().css("position :relative");
$("#datetime5").datetimepicker({
    inline: true,
    sideBySide: true
});
//dtetime picker end
    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%'
    });

    $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$'
    });

    $("input[name='demo_vertical']").TouchSpin({
        verticalbuttons: true
    });

    $("input[name='demo_vertical2']").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'glyphicon glyphicon-plus',
        verticaldownclass: 'glyphicon glyphicon-minus'
    });

    $("input[name='demo3']").TouchSpin();

    $("input[name='demo3_21']").TouchSpin({
        initval: 40
    });

    $("input[name='demo3_22']").TouchSpin({
        initval: 40
    });

    $("input[name='demo4']").TouchSpin({
        postfix: "a button",
        postfix_extraclass: "btn btn-default"
    });

    $("input[name='demo4_2']").TouchSpin({
        postfix: "a button",
        postfix_extraclass: "btn btn-default"
    });

    $("input[name='demo5']").TouchSpin({
        prefix: "pre",
        postfix: "post"
    });

    $("input[name='demo6']").TouchSpin({
        buttondown_class: "btn btn-link",
        buttonup_class: "btn btn-link"
    });
    
    $(document).ready(function() {
        $('.multiselect').multiselect();
        $('#example2').multiselect();
        $('#example27').multiselect({
            includeSelectAllOption: true
        });

        // Add options for example 28.
        for (var i = 1; i <= 100; i++) {
            $('#example28').append('<option value="' + i + '">' + i + '</option>');
        }

        $('#example28').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            maxHeight: 150
        });

        $('#example28-values').on('click', function() {
            var values = [];

            $('option:selected', $('#example28')).each(function() {
                values.push($(this).val());
            });

            alert(values);
        });

        $('#example3').multiselect({
            buttonClass: 'btn btn-link'
        });
        $('#example6').multiselect();

        $('#example9').multiselect({
            onChange: function(element, checked) {
                alert('Change event invoked!');
                console.log(element);
            }
        });

        $('#example13').multiselect();

        $('#example19').multiselect();

        $('#example35').multiselect();
        $('#example35-enable').on('click', function() {
            $('#example35').multiselect('enable');
        });
        $('#example35-disable').on('click', function() {
            $('#example35').multiselect('disable');
        });
    });
$("[name='my-checkbox']").bootstrapSwitch();