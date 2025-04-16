<?php

function redirect_wp_login() {

    $allowed_actions = ['logout', 'lostpassword', 'rp', 'resetpass', 'register'];

    if (
        strpos($_SERVER['REQUEST_URI'], 'wp-login.php') !== false &&
        (!isset($_GET['action']) || !in_array($_GET['action'], $allowed_actions))
    ) {
        wp_redirect(home_url('/portal/?fcom_action=auth'));
        exit;
    }
}
add_action('init', 'redirect_wp_login');
