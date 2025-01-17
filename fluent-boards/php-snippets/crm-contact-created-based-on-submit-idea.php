<?php
add_action('fluent_roadmap/idea_created', function ($idea, $board, $targetStage) {
    $userId = get_current_user_id();

    if ($userId) {
        $user = get_userdata($userId);
        $contactData = [
            'email'      => $user->user_email,
            'first_name' => $user->first_name ?: '',
            'last_name'  => $user->last_name ?: '',
            'status'     => 'subscribed',
            'tags'       => ['Submitted Roadmap Idea'],
            'custom_fields' => [
                'submitted_idea_title' => sanitize_text_field($idea->title),
            ],
        ];
    } else {

        $author = isset($idea->settings['author']) ? $idea->settings['author'] : null;

        if (!$author || empty($author['email']) || empty($author['name'])) {
            return;
        }

        $nameParts = explode(' ', trim($author['name']), 2);
        $firstName = sanitize_text_field($nameParts[0]);
        $lastName = isset($nameParts[1]) ? sanitize_text_field($nameParts[1]) : '';

        $contactData = [
            'email'      => sanitize_email($author['email']),
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'status'     => 'subscribed',
            'tags'       => ['Submitted Roadmap Idea'],
            'custom_fields' => [
                'submitted_idea_title' => sanitize_text_field($idea->title),
            ],
        ];
    }

    $contact = FluentCrmApi('contacts')->createOrUpdate($contactData, false, false);

    if ($contact) {
        error_log('FluentCRM contact created/updated: ' . $contact->email);
    }
}, 10, 3);