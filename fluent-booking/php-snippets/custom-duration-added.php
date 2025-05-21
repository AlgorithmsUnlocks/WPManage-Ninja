<?php
// Attach the function to the filter hook.
add_filter('fluent_booking/meeting_multi_durations_schema', function ($durations){
    $new_durations = [
        [
            'value' => '300',
            'label' => __('300 Minutes', 'fluent-booking-pro')
        ],
        [
            'value' => '600',
            'label' => __('600 Minutes', 'fluent-booking-pro')
        ],
        [
            'value' => '720',
            'label' => __('720 Minutes', 'fluent-booking-pro')
        ]
    ];
    $durations = array_merge($durations, $new_durations);
    usort($durations, function($a, $b) {
        return $a['value'] - $b['value'];
    });
    foreach ($durations as $key => $duration) {
        if ($duration['value'] == '60') {
            unset($durations[$key]);
        }
    }
    return $durations;
});
