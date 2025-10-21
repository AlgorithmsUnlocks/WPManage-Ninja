<?php
add_action('fluentform/before_insert_submission', function($insertData, $data, $form) {
    if ($form->id == 46) {
        // Create your category here
        $category_name = sanitize_text_field($data['input_text']);
        error_log($category_name);
        wp_insert_term($category_name, 'category');
    }
}, 10, 3);
