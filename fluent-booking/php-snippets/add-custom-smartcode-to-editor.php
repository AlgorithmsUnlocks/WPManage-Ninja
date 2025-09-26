<?php
add_filter('fluent_booking/editor_shortcodes_groups', function($groups, $calendarEvent = null, $isHtmlSupported = false) {
    $groups['custom'] = [
        'title'      => __('Custom Data', 'fluent-booking'),
        'key'        => 'custom',
        'shortcodes' => [
            '{{custom.greeting}}'        => __('Greeting (e.g. Hello John)', 'fluent-booking'),
            '{{custom.event_location}}'  => __('Event Location (custom)', 'fluent-booking'),
        ],
    ];
    if ($calendarEvent) {
        $groups['custom']['shortcodes']['{{custom.event_meta}}'] = __('Event meta (dynamic)', 'fluent-booking');
    }

    return $groups;
}, 10, 3);
