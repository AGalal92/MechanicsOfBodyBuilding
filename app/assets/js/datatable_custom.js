$(document).ready(function () {
    $('#table_id').DataTable({"oLanguage": {
            "sSearch": "Search",
            "sSearchPlaceholder": ""
        }});
});
$('.taple-data').click(function () {
    $('.taple-data').css('backgroundColor', '#ffffff');
    $(this).css('backgroundColor', '#ffc5ab');
});

$("input").hover(function () {
    // $(this).hide();
});

 
 