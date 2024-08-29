<?php

$data = apply_filters('fluent_booking/host_view_page_vars', $data, $calendar, $activeEvents, $authorProfile);

add_filter('fluent_booking/host_view_page_vars',function($data) {
    $assetUrl = \FluentBooking\App\App::getInstance('url.assets');
    $data['css_files'][] = $assetUrl . 'public/landing_page.css';
    return $data;
},10,1);