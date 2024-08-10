<?php

add_filter('fluent_booking/google_event_data', function($data, $booking){
    if ($booking->event_id == 12) {
        $data['summary'] = "Test 12";
    }
    return $data;
},10,2);