<?php
add_action('init', function () {
    $wp_version = get_bloginfo('version');

    if (version_compare($wp_version, '6.7', '>=')) {
        $locale = determine_locale();
        $locale = apply_filters('plugin_locale', $locale, 'fluent-booking');

        unload_textdomain('fluent-booking', true);

        $mo_file = FLUENT_BOOKING_DIR . 'language/fluent-booking-' . $locale . '.mo';

        if (file_exists($mo_file)) {
            load_textdomain('fluent-booking', $mo_file);
        }
    }
});