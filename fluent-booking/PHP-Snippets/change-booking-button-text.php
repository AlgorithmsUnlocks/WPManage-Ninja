<?php

/*
 *  Submit button text change for FluentBooking
 */

add_filter('fluent_booking/public_event_vars',function($eventVars){

    $eventVars['i18n']['Schedule_Meeting'] = __('New Button Text', 'fluent-booking-pro');

    return $eventVars;

},10,1);