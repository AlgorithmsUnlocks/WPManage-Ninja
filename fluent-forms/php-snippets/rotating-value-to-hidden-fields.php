<?php
add_filter('fluentform/insert_response_data', function($formData, $formId, $inputConfigs) {
    if ($formId != 24) {
        return $formData;
    }
    $option_name = 'ff_last_coach_index_24';
    $max_coaches = 3;
    $last_coach_index = intval( get_option($option_name, 0) );
    $next_coach_index = ($last_coach_index % $max_coaches) + 1;

    update_option($option_name, $next_coach_index);
    $formData['hidden_assign_coach'] = $next_coach_index;
    return $formData;
}, 10, 3);
