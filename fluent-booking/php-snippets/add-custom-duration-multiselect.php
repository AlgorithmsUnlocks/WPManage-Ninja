<?php
add_filter('fluent_booking/meeting_multi_durations_schema', function ($durations) {
    $durations[] = [
        'value' => '75',
        'label' => __('75 Minutes', 'fluent-booking')
    ];
    return $durations;
});
