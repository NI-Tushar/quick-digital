<?php

return [
    // Set this to true to enable sandbox mode
    'sandbox_mode' => env('SHURJOPAY_SANDBOX_MODE',true),

    // ShurjoPay credentials
    'username' => env('SHURJOPAY_MERCHANT_USERNAME', 'sp_sandbox'),
    'password' => env('SHURJOPAY_MERCHANT_PASSWORD', 'pyyk97hu&6u6'),
    'prefix' => env('SHURJOPAY_MERCHANT_PREFIX', 'NOK'),

    // Merchant URL
    'merchant_url' => env('SHURJOPAY_MERCHANT_URL', 'https://securepay.shurjopayment.com/'),
];


// return [
//     // set this to true to enable sandbox mode
//     'sandbox_mode' => env('SHURJOPAY_SANDBOX_MODE', true),

//     // ShurjoPay credentials [Change these with your details]
//     'username' => env('SHURJOPAY_MERCHANT_USERNAME'),
//     'password' => env('SHURJOPAY_MERCHANT_PASSWORD'),
//     'prefix' => env('SHURJOPAY_MERCHANT_PREFIX'),
//     'merchant_url' => env('SHURJOPAY_MERCHANT_URL')
// ];
