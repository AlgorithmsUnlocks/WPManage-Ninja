<?php
add_filter('fluent_boards/before_task_create', function ($data) {

    $predefinedUserIds = [8, 2, 9];

    if (!isset($data['assignees'])) {
        $data['assignees'] = [];
    }

    $data['assignees'] = array_unique(array_merge($data['assignees'], $predefinedUserIds));

    return $data;
});
