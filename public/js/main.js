$(document).ready(function(){
    // for getting menus
    $('#food_name').change(function(){
        $('#food_id').val($(this).children('option:selected').val());
    });
});