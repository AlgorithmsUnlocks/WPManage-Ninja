<?php
add_filter('fluentform/available_payment_methods', function ($methods) {
    // Cheque
    $methods['cheque'] = [
        'title'    => __('Cheque Payment', 'fluentformpro'),
        'settings' => [
            'option_label' => [
                'value' => __('Pay by Cheque', 'fluentformpro')
            ],
            'instructions' => [
                'value' => __('Please send a cheque to our office. Your order will be processed once the cheque clears.', 'fluentformpro')
            ]
        ]
    ];

    // Bank Deposit
    $methods['bank_deposit'] = [
        'title'    => __('Bank Deposit', 'fluentformpro'),
        'settings' => [
            'option_label' => [
                'value' => __('Pay via Bank Deposit', 'fluentformpro')
            ],
            'instructions' => [
                'value' => __('Deposit payment to our bank account and upload the receipt. Bank: Example Bank, Account: 123-456-789.', 'fluentformpro')
            ]
        ]
    ];

    // Local Manual Payment
    $methods['local_manual'] = [
        'title'    => __('Local Manual Payment', 'fluentformpro'),
        'settings' => [
            'option_label' => [
                'value' => __('Pay Locally (Manual)', 'fluentformpro')
            ],
            'instructions' => [
                'value' => __('Please visit our office and pay in person. Bring your order reference for faster processing.', 'fluentformpro')
            ]
        ]
    ];

    return $methods;
});
