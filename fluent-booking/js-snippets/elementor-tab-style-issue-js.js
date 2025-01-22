jQuery(document).ready(function ($) {
    function handleCalendarClasses() {
        $('.fcal_calendar_inner').each(function () {
            const calendar = $(this);
            if (window.innerWidth <= 768) {
                if (!calendar.hasClass('fcal_on_xs') || !calendar.hasClass('fcal_mobile')) {
                    calendar.addClass('fcal_on_xs fcal_mobile').removeClass('fcal_on_lg');
                }
            } else {
                if (calendar.hasClass('fcal_on_xs') || calendar.hasClass('fcal_mobile')) {
                    calendar.removeClass('fcal_on_xs fcal_mobile').addClass('fcal_on_lg');
                }
            }
        });
    }

    function initializeTabs() {
        $('.e-n-tab-title').on('click', function () {
            setTimeout(function () {
                handleCalendarClasses();
            }, 300);
        });
    }

    handleCalendarClasses();

    $(window).on('resize', function () {
        handleCalendarClasses();
    });
    initializeTabs();
});
