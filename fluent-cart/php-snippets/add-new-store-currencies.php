<?php
add_filter('fluent_cart/accepted_currencies', function ($currencies) {
    // Add the Iranian Rial currency
    $currencies['IRR'] = 'Iranian Rial';
    return $currencies;
});
