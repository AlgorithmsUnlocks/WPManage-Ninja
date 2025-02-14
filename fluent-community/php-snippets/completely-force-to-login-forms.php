<?php
function redirect_wp_login_customize() {
    if (strpos($_SERVER['REQUEST_URI'], 'wp-login.php') !== false) {
        wp_redirect('https://fluent.dev/portal/?fcom_action=auth');
        exit;
    }
}
add_action('init', 'redirect_wp_login_customize');
