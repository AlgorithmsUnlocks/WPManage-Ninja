<?php
function custom_login_redirect($login_url, $redirect, $force_reauth) {
    return 'https://yourdomain/portal/?fcom_action=auth';
}
add_filter('login_url', 'custom_login_redirect', 10, 3);
