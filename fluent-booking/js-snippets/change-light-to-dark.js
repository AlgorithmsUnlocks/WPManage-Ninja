document.addEventListener("DOMContentLoaded", function () {
    const calendarDiv = document.querySelector(".fcal_cal_wrap");

    if (calendarDiv.classList.contains("fcal-light-mode")) {
        calendarDiv.classList.replace("fcal-light-mode", "fcal-dark-mode");
    }
});