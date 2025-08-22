<?php

add_filter('fluent_booking/booking_confirmation_page_vars', function($data, $booking, $calendarEvent) {
    $data['back_button']['url'] = site_url('/booking/');
    return $data;
}, 10, 3);
