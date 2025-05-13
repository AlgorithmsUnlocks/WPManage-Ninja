<?php
add_filter('fluent_calendar/global_booking_vars', function ($data) {
    if (isset($data['i18']) && is_array($data['i18'])) {
        $data['i18']['This field is required.'] = __('Please complete this field.', 'fluent-booking');
    }
    return $data;
});
