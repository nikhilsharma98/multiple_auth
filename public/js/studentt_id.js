$(document).ready(function(){
    // for getting menus
    $('#name').change(function(){
        $('#studentt_id').val($(this).children('option:selected').val());
    });
});