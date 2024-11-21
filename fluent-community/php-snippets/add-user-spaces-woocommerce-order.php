<?php
add_action('init', function() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();

        $product_id = 1830;
        $space_id = 4;
        $role = 'member';
        $by = 'by_admin';

        if (class_exists('\FluentCommunity\App\Services\Helper')) {
            if (function_exists('wc_customer_bought_product') &&
                wc_customer_bought_product($current_user->user_email, $current_user->ID, $product_id)
            ) {
                $helper = new \FluentCommunity\App\Services\Helper();

                $helper->addToSpace($space_id, $current_user->ID, $role, $by);
            }
        }
    }
});
