<?php
add_filter('fluent_community/rate_limit/posts_per_5_minutes', function($limit) {
    return 10; // allow 10 posts per 5 minutes
});
