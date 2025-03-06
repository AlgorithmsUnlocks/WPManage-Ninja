jQuery(document).ready(function ($) {
    // Change h1 to h3 inside .fcal_slot_info
    $(".fcal_slot_info .fcal_slot_heading").each(function () {
        var newElement = $("<h3></h3>")
            .html($(this).html())
            .addClass($(this).attr("class"));

        $(this).replaceWith(newElement);
    });

    // Change h2 to h3 inside .calendar-month-year
    $(".calendar-month-year h2").each(function () {
        var newElement = $("<h3></h3>")
            .html($(this).html())
            .addClass($(this).attr("class"));

        $(this).replaceWith(newElement);
    });
});
