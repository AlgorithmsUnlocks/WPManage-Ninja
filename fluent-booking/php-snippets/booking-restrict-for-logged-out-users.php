<?php
/*
 * In message parameter, you can set the loggin link of your website and the message you want to display.
 */
add_action('fluent_booking/before_creating_schedule',function ($bookingData, $postedData, $calendarEvent){
    if(!is_user_logged_in()){
        wp_send_json([
            'success' => false,
            'message' => __('You need to be logged in to schedule a meeting. Please log in and try again. <a href="/login" target="_blank">Login Now</a>','fluent-booking')
        ],403);
    }
},10,3);