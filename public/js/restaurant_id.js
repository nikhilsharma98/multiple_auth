$(document).ready(function(){
    // for getting menus
    $('#name').change(function(){
        $('#restaurant_id').val($(this).children('option:selected').val());
    });
});