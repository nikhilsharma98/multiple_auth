$(document).ready(function(){
    // for getting menus
    $('#title').change(function(){
        $('#work_id').val($(this).children('option:selected').val());
    });
});