<?php

// This snippets will add the new file types to the FluentBoards task

function custom_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml'; // Allow SVG uploads
    $mimes['json'] = 'application/json'; // Allow JSON uploads
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');