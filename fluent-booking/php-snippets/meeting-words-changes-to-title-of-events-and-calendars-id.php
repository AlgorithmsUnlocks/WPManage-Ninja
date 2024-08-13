<?php

add_filter('fluent_booking/booking_meeting_title', function($meetingTitle, $authorName, $guestName, $calendarSlot, $instance) {

    $calendarIds = [1,2];
    $eventIds = [1,2];

    $calendarId = $instance['calendar_id'];
    $eventId = $instance['event_id'];

    if(in_array($calendarId, $calendarIds) && in_array($eventId, $eventIds)){
        $meetingTitle = "$calendarSlot->title Your Text {$authorName} and {$guestName}";
        return $meetingTitle;
    }else{
        $meetingTitle = "$calendarSlot->title meeting between {$authorName} and {$guestName}";
        return $meetingTitle;
    }

}, 10, 5);