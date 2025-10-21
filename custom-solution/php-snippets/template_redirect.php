<?php
add_action( 'template_redirect', function (){
    if (
        is_user_logged_in() ||
        is_admin() ||
        $GLOBALS['pagenow'] === 'wp-login.php' ||
        ( defined( 'DOING_AJAX' ) && DOING_AJAX )
    ) {
        return;
    }
    wp_redirect( wp_login_url( $_SERVER['REQUEST_URI'] ) );
    exit;
});
