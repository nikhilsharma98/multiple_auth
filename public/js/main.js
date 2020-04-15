$(document).ready(function(){
    // for getting menus
    $('#class').change(function(){
        $('#student_class_id').val($(this).children('option:selected').val());
    });
});