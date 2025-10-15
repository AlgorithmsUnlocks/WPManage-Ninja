<?php
add_action('fluent_community/document/local_file_access', function($document) {
    if ($document->media_url) {
        wp_redirect($document->media_url);
        exit();
    }
}, 10, 1);
