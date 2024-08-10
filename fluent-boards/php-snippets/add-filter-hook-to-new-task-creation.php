<?php

add_filter('fluent_boards/before_task_create', function ($taskData, $board_id){

    $default_user_id = 1;
    $specific_board_ids = [1, 2];

    if (in_array($board_id, $specific_board_ids)) {
        if (empty($taskData['assignees'])) {
            $taskData['assignees'] = [$default_user_id];
        }
    }
    return $taskData;

}, 10, 2);