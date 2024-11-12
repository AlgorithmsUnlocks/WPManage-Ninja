document.addEventListener("DOMContentLoaded", function () {
    const calendarDiv = document.querySelector(".fcal_cal_wrap");
    const teamCalendarDiv = document.querySelector(".fcal_calendar_wrap_block");

    if (calendarDiv.classList.contains("fcal-light-mode") || !teamCalendarDiv.classList.contains("fcal-light-mode")) {
        calendarDiv.classList.replace("fcal-light-mode", "fcal-dark-mode");
        teamCalendarDiv.classList.add("fcal-dark-mode");
    }

});