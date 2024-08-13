<?php

add_filter('fluent_booking/schedule_receipt_data',function($confirmationData, $booking){

    $calendarIds = [1,2];
    $eventIds = [1,2];

    $calendarId = $booking['calendar_id'];
    $eventId = $booking['event_id'];

    if(in_array($calendarId, $calendarIds) && in_array($eventId, $eventIds)){

        $bookingStatus = $booking->getBookingStatus();
        $newTitlePrefix = __('Your appointment has been', 'fluent-booking');
        $confirmationData['title'] = sprintf('%s %s', $newTitlePrefix, $bookingStatus);
    }else{
        $bookingStatus = $booking->getBookingStatus();
        $newTitlePrefix = __('Your booking has been', 'fluent-booking');
        $confirmationData['title'] = sprintf('%s %s', $newTitlePrefix, $bookingStatus);
    }

    return $confirmationData;

},10,2);