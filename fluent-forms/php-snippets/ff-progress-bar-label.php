<?php
add_filter('fluentform/step_string', function() {
    return __('Page %activeStep% of %totalStep%', 'fluentform');
});
