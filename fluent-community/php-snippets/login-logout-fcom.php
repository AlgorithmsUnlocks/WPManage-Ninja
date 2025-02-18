<?php

function redirect_wp_login() {
    if (isset($_GET['action']) && in_array($_GET['action'], ['logout', 'lostpassword', 'rp'])) {
        return;
    }

    if (strpos($_SERVER['REQUEST_URI'], 'wp-login.php') !== false) {
        wp_redirect(home_url('/portal/?fcom_action=auth'));
        exit;
    }
}
add_action('init', 'redirect_wp_login');
