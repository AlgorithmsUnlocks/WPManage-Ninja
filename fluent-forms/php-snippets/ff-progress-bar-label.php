<?php
add_filter('fluentform/step_string', function() {
    return __('Del %activeStep% of %totalStep%', 'fluentform');
});
