$(document).ready(function(){
    $( "#reset" ).click(function() {
        $("#trow").val("");
        $("#tcol").val("");
        $("input[type='checkbox']").prop("disabled",false);
        $("input[type='text']").prop('disabled', false);
        $("#form_submit").removeAttr("disabled");
        $("#reset").removeAttr("disabled");
        $("#table").find('table').remove();
        $('#html_code').val("");
        $('.html').addClass('hidden');
        $('.table_view').addClass('hidden');
    });


    $('#form_submit').click(function(e){
        e.preventDefault();
        var tbl_display = $("#table");
        var rows =$('#trow').val();
        var cols= $('#tcol').val();
        var tbl = document.createElement('table');

        //checking and adding style
        //checking which style is selected
        if (document.table_gen.bordered.checked){
            tbl.setAttribute("class", "table table-bordered");
        }
        if (document.table_gen.stripped.checked){
            tbl.setAttribute("class", "table table-striped");
        }
        if (document.table_gen.condensed.checked){
            tbl.setAttribute("class", "table table-condensed");
        }
        if (document.table_gen.stripped.checked && document.table_gen.condensed.checked){
            tbl.setAttribute("class", "table table-striped table-condensed");
        }
        if (document.table_gen.bordered.checked && document.table_gen.condensed.checked){
            tbl.setAttribute("class", "table table-bordered table-condensed");
        }
        if (document.table_gen.bordered.checked && document.table_gen.stripped.checked){
            tbl.setAttribute("class", "table table-striped table-bordered");
        }
        if (document.table_gen.bordered.checked && document.table_gen.stripped.checked && document.table_gen.condensed.checked){
            tbl.setAttribute("class", "table table-striped table-bordered table-condensed");
        }
        if (!document.table_gen.stripped.checked && !document.table_gen.bordered.checked && !document.table_gen.condensed.checked){
            tbl.setAttribute("class", "table");
        }
        var tblHead = document.createElement('thead');
        tbl.appendChild(tblHead);
        var tblrow = document.createElement("tr");
        tblHead.appendChild(tblrow);
        for( var r=0; r< cols; r++)
        {
            var tblHeadCell = document.createElement('th');
            tblrow.appendChild(tblHeadCell);
            var thText = document.createTextNode("thead "+r);
            tblHeadCell.appendChild(thText);
        }
        var tblBody = document.createElement("tbody");
        for (var p = 0; p < rows; p++) {
            // creates a table row
            var row = document.createElement("tr");

            for (var q = 0; q < cols; q++) {
                // Create a <td> element and a text node, make the text
                // node the contents of the <td>, and put the <td> at
                // the end of the table row
                var cell = document.createElement("td");
                var cellText = document.createTextNode("cell row "+p+", column "+q);
                cell.appendChild(cellText);
                row.appendChild(cell);
            }
            // add the row to the end of the table body
            tblBody.appendChild(row);
        }
        tbl.appendChild(tblBody);
        //display table
        $(tbl).appendTo(tbl_display);
        $('.table_view').removeClass('hidden');
        //disable the submit button
        var submt = document.table_gen.submit;
        $("input[type='checkbox']").prop('disabled', true);
        $("input[type='text']").prop('disabled', true);
        submt.setAttribute("disabled", "disabled");
        $("#generate_code").prop('disabled',false);
    });
    $("#generate_code").prop('disabled',true);
    $("#generate_code").click(function(e)
    {
        e.preventDefault();
        var gcode=document.table_gen.generate_code;
        $.each($('textarea[data-autoresize]'), function() {
            var offset = this.offsetHeight - this.clientHeight;
            $('#html_code').val($('#table').html());
            var resizeTextarea = function(el) {
                jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
            };
            jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
        });
        gcode.setAttribute("disabled", "disabled");
        $('.html').removeClass('hidden');
    });
});