document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.fcal_slot_info .fcal_slot_heading').forEach(function (el) {
        const newH3 = document.createElement('p');
        newH3.innerHTML = el.innerHTML;
        newH3.className = el.className;
        el.replaceWith(newH3);
    });
    document.querySelectorAll('.calendar-month-year h2').forEach(function (el) {
        const newP = document.createElement('p');
        newP.innerHTML = el.innerHTML;
        newP.className = el.className;
        el.replaceWith(newP);
    });
});
