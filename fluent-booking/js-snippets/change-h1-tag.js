jQuery(document).ready(function ($) {
    $(".fcal_slot_info .fcal_slot_heading").each(function () {
        var newElement = $("<h3></h3>")
            .html($(this).html())
            .addClass($(this).attr("class"));

        $(this).replaceWith(newElement);
    });
});
