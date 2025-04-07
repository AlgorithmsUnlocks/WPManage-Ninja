<?php

// Invitation form title
add_filter('fluent_boards/invitation_form_title', function($title) {
    $title = "Ruman From WPManageNinja";
    return $title;
});

// Invitation form text
add_filter('fluent_boards/invitation_form_registration_text', function($text) {
    $text = "Technical Support Need?";
    return $text;
});
