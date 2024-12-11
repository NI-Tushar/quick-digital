<?php

/**
 * This php file returns environmental values from .env as cached config
 *
 * @author Rayhan Khan Ridoy
 * @since 2022-12-01
 */
return [
  'merchant_username' => env('SURJOPAY_MERCHANT_NAME'),
  'merchant_password' => env('SURJOPAY_MERCHANT_PASSWORD'),
  'merchant_prefix' => env('SURJOPAY_MERCHANT_PREFIX'),
//   'merchant_return_url' => env('MERCHANT_RETURN_URL'),
//   'merchant_cancel_url' => env('MERCHANT_CANCEL_URL'),
  'auth_token_url' => env('SURJOPAY_GET_TOKEN_URL'), // /api/get_token,
  'secret_pay_url' => env('ENGINSURJOPAY_SECRETPAY_URLE_URL'), // /api/secret-pay',
  'verification_url' => env('SURJOPAY_VERIFIC_URL'),  // /api/verification',
  /* this log_location1 is for laravel_version 5.0x to 9.0x(or above)"  */
  'log_location1'=> storage_path('logs/shurjoPay-plugin.log'),
  /* this log_location2 is for "laravel_version < 5.0x" */
  'log_location2'=> 'storage/logs/',
];

// return [
//     // Set this to true to enable sandbox mode
//     'sandbox_mode' => env('SHURJOPAY_SANDBOX_MODE',true),

//     // ShurjoPay credentials
//     'username' => env('SHURJOPAY_MERCHANT_USERNAME', 'sp_sandbox'),
//     'password' => env('SHURJOPAY_MERCHANT_PASSWORD', 'pyyk97hu&6u6'),
//     'prefix' => env('SHURJOPAY_MERCHANT_PREFIX', 'WCN'),s

//     // Merchant URL
//     'merchant_url' => env('SHURJOPAY_MERCHANT_URL', 'https://sandbox.shurjopayment.com/api/get_token'),
// ];


// // return [
// //     // set this to true to enable sandbox mode
// //     'sandbox_mode' => env('SHURJOPAY_SANDBOX_MODE', true),

// //     // ShurjoPay credentials [Change these with your details]
// //     'username' => env('SHURJOPAY_MERCHANT_USERNAME'),
// //     'password' => env('SHURJOPAY_MERCHANT_PASSWORD'),
// //     'prefix' => env('SHURJOPAY_MERCHANT_PREFIX'),
// //     'merchant_url' => env('SHURJOPAY_MERCHANT_URL')
// // ];
