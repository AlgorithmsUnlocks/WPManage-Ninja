document.addEventListener("DOMContentLoaded", function () {
    const calendarDiv = document.querySelector(".fcal_cal_wrap");
    const teamCalendarDiv = document.querySelector(".fcal_calendar_wrap_block");
    const calendarHost = document.querySelector(".fluent_booking_wrap");

    if (calendarDiv) {
        if (calendarDiv.classList.contains("fcal-light-mode")) {
            calendarDiv.classList.replace("fcal-light-mode", "fcal-dark-mode");
        } else {
            calendarDiv.classList.add("fcal-dark-mode");
        }
    }

    if (teamCalendarDiv) {
        if (!teamCalendarDiv.classList.contains("fcal-light-mode")) {
            teamCalendarDiv.classList.add("fcal-dark-mode");
        }
    }

    if (calendarHost) {
        if (!calendarHost.classList.contains("fcal-light-mode")) {
            calendarHost.classList.add("fcal-dark-mode");
        }
    }
});
