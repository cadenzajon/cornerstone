var c = window.location.href.match(/c=inline/i) ? 'inline' : 'popup';
$.fn.editable.defaults.mode = c === 'inline' ? 'inline' : 'popup';

$(function() {
    $('#f').val(f);
    $('#c').val(c);
});
var f = 'bootstrap3';