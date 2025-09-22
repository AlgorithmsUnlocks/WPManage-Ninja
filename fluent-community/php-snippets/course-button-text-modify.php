<?php
add_filter('gettext', function($translation, $text, $domain) {
    if ($domain !== 'fluent-community') {
        return $translation;
    }
    $custom_translations = [
        'Login to enroll this course' => 'Sign In to Join Course',
        'Enroll this course' => 'Join Course',
        'Continue Course' => 'Resume Learning'
    ];
    return $custom_translations[$text] ?? $translation;
}, 10, 3);
