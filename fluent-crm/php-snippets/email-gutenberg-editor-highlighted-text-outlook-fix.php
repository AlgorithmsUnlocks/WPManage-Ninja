<?php
/**
 * email-gutenberg-editor-highlighted-text-outlook-fix
 */

add_filter('fluent_crm/parse_campaign_email_text', function ($emailBody, $subscriber) {
    $emailBody = str_replace(['<mark', '</mark>'], ['<span', '</span>'], $emailBody);

    return $emailBody;
}, 10, 2);