<?php
add_filter('fluent_community/social_link_providers', function ($links) {
    $links['zalo'] = [
        'title'       => __('Zalo', 'fluent-community'),
        'icon_svg'    => '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 
                                     10-4.477 10-10S17.523 2 12 2zm3.9 14.3h-7.8a.5.5 0 01-.5-.5v-7.6a.5.5 0 01.5-.5h7.8a.5.5 0 01.5.5v7.6a.5.5 0 01-.5.5z"/>
                            <text x="7" y="15" font-size="6" fill="#fff" font-family="Arial, sans-serif">Z</text>
                          </svg>',
        'placeholder' => 'zalo_username_or_id',
        'domain'      => 'https://zalo.me/',
        'enabled'     => 'yes'
    ];
    return $links;
});
