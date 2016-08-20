$('table').bootstrapTable();
function rowStyle(row, index) {
    var classes = ['active', 'success', 'info', 'warning', 'danger'];

    if (index % 2 === 0 && index / 2 < classes.length) {
        return {
            classes: classes[index / 2]
        };
    }
    return {};
}

var $table = $('#table1'),
    $button = $('#button'),
    $button2 = $('#button2');
$(function () {
    $button.click(function () {
        $table.bootstrapTable('showColumn', 'first_name');
    });
    $button2.click(function () {
        $table.bootstrapTable('hideColumn', 'first_name');
    });
});

var $div = $('.div-table'),
    $table3 = $('#table3'),
    $button3_1 = $('#button3_1'),
    $button3_2 = $('#button3_2');
$(function () {
    $button3_1.click(function () {
        $div.width($div.width() + 50);
        $table3.bootstrapTable('resetView');
    });
    $button3_2.click(function () {
        $div.width($div.width() - 50);
        $table3.bootstrapTable('resetView');
    });
});