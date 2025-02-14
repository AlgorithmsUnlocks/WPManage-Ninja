<?php

add_filter('fluent_booking/week_select_times_schema', function ($times) {
    $times['end'] = '24:00';
    return $times;
});
