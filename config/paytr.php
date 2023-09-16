<?php
/**
 * @author Gizem Sever <gizemsever68@gmail.com>
 */

// return [
//     'credentials' => [
//         'merchant_id' => env('PAYTR_MERCHANT_ID'),
//         'merchant_salt' => env('PAYTR_MERCHANT_SALT'),
//         'merchant_key' => env('PAYTR_MERCHANT_KEY'),
//     ],
//     'options' => [
//         'base_uri' => env('PAYTR_BASE_URI', 'https://www.paytr.com'),
//         'timeout' => env('PAYTR_TIMEOUT', 60),
//         'success_url' => env('PAYTR_SUCCESS_URL'),
//         'fail_url' => env('PAYTR_FAIL_URL'),
//         'test_mode' => env('PAYTR_TEST_MODE', true),
//     ]
// ];
return [
    'credentials' => [
        'merchant_id' => '377630',
        'merchant_salt' => 'B2N5b95tHGKu9q8N',
        'merchant_key' => 'uad3uskMsir3ukUq',
    ],
    'options' => [
        'base_uri' => 'https://www.paytr.com',
        'timeout' => 60,
        'success_url' => 'http://localhost:8000/success_payment',
        'fail_url' => 'http://localhost:8000/fail_payment',
        'test_mode' => false
    ]
];