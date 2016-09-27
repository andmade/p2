$(function () {

    //Click Handler for Select All Button - Checks all Boxes
    $("#buttonSelectAll").click(function () {
        $(".arcana-checkbox").prop("checked", true);
    });


    //Click Handler for Deelect All Button - Unchecks all Boxes
    $("#buttonDeselectAll").click(function () {
        $(".arcana-checkbox").prop("checked", false);
    });


});