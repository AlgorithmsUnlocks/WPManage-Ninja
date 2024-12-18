<?php

add_filter('fluent_booking/event_landing_page_vars', function ($data){
    $data['title'] = "Ruman Ahmed Changed"; // write whatever you want
    return $data;
},10,1);