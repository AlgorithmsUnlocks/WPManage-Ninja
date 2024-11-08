<?php
add_filter('fluent_calendar/global_booking_vars', function ($vars) {
    if (empty($vars['current_person']['email'])) {
        $vars['current_person']['email'] = 'test@gmail.com';
    }
    return $vars;
});
