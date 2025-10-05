<?php
add_action('fluentform/submission_inserted', function($insertId, $formData, $form) {
    $target_form_id = 39; // Replace with your quiz form ID
    if ($form->id != $target_form_id) {
        return;
    }
    $email = isset($formData['email']) ? sanitize_email($formData['email']) : '';

    if (empty($email)) {
        return;
    }
    $user = get_user_by('email', $email);
    if (!$user) {
        return;
    }
    $quiz_score = isset($formData['quiz-score']) ? intval($formData['quiz-score']) : 0;
    update_user_meta($user->ID, '_fluent_quiz_score', $quiz_score);
    do_action('my_quiz_score_saved', $user->ID, $quiz_score, $form->id);

}, 10, 3);
