<?php
add_action('fluent_booking/before_booking', function($bookingData, $calendarSlot) {

    // Define restricted event IDs
    $restricted_event_ids = [5, 6, 8];

    $event_id = $calendarSlot->event_id ?? $calendarSlot->id ?? null;
    if (!$event_id) {
        return;
    }
    if (!in_array((int) $event_id, $restricted_event_ids, true)) {
        return;
    }
    $email = $bookingData['email'] ?? '';
    if (!$email) {
        return;
    }
    $existing_booking = \FluentBooking\App\Models\Booking::where('event_id', $event_id)
        ->where('email', $email)
        ->whereIn('status', ['scheduled', 'confirmed', 'pending'])
        ->first();

    if ($existing_booking) {
        wp_send_json_error([
            'message' => __('You have already booked this event. Multiple bookings for this event are not allowed.', 'your-textdomain')
        ], 400);
        exit;
    }

}, 10, 2);
