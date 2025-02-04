<?php

function add_fluent_community_custom_styles($scope) {
    echo '<style>
      .fls_login_wrapper #fls_2fa_form>p, .fls_login_wrapper form#loginform>p {
    display: none !important;
}
    </style>';
}
add_action('fluent_community/headless/head', 'add_fluent_community_custom_styles');
