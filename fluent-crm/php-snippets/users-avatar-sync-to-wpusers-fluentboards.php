<?php
add_filter( 'get_avatar_url', function ( $url, $id_or_email, $args ) {

    if ( ! class_exists( '\FluentCrm\App\Models\Subscriber' ) ) {
        return $url;
    }
    $user_id = is_numeric( $id_or_email ) ? $id_or_email : email_exists( $id_or_email );
    if ( ! $user_id ) {
        return $url;
    }
    $crm_avatar = \FluentCrm\App\Models\Subscriber::where('user_id', $user_id)
        ->value('avatar');

    return $crm_avatar ?: $url;
}, 10, 3 );
