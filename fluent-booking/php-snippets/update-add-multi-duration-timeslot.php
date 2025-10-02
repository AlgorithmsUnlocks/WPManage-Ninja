<?php
add_filter('fluent_booking/meeting_multi_durations_schema', function ($durations) {

    // Update an existing label (e.g. change "30 Minutes" to "Half Hour")
    foreach ($durations as &$duration) {
        if ($duration['value'] == '120') {
            $duration['label'] = __('120 Minutes - 2 hours', 'fluent-booking');
        }
        if ($duration['value'] == '180') {
            $duration['label'] = __('180 Minutes - 3 hours', 'fluent-booking');
        }
        if ($duration['value'] == '240') {
            $duration['label'] = __('240 Minutes - 4 hours', 'fluent-booking');
        }
        if ($duration['value'] == '480') {
            $duration['label'] = __('480 Minutes - 8 hours', 'fluent-booking');
        }
    }

    // Add new custom timeslots
    $durations[] = [
        'value' => '300',
        'label' => __('300 Minutes - 5 hours', 'fluent-booking')
    ];

    $durations[] = [
        'value' => '360',
        'label' => __('360 Minutes - 6 hours', 'fluent-booking', 'fluent-booking')
    ];

    return $durations;
});
