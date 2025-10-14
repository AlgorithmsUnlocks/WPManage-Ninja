<?php
add_filter('fluent_auth/signup_policy_url', function ($policyUrl){
    //Change it to your actual terms and condition page url
    $policyUrl = "https://domain.com/terms_condition_page_url";
    return $policyUrl;
});
