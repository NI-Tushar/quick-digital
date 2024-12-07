<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Raziul\Shurjopay\Facades\Shurjopay;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {

        // Generate a unique order ID
        $orderId = uniqid('order_', true);

        // Prepare data for the payment
        $data = [
            'currency' => "BDT",
            'amount' => '550',
            'order_id' => $orderId,
            'customer_name' => 'customer name', 
            'customer_address' => 'address',
            'customer_phone' => '01777608508',
            'customer_email' => 'demomail@gmail.com',
            'customer_city' => 'dhaka',
        ];

        // Set the callback URLs
        $success_url = route('payment.successfull'); // Ensure this route exists
        $cancel_url = route('payment.cancel');   // Ensure this route exists

        if(Shurjopay::setCallbackUrl($success_url, $cancel_url)){
            Shurjopay::setCallbackUrl($success_url, $cancel_url)->makePayment($data);
        }else{
            print_r('not');
        }

        // Set callback URLs and make payment
        // try {
        //     Shurjopay::setCallbackUrl($successUrl, $cancelUrl)->makePayment($data);
        // } catch (\Exception $e) {
        //     return $e->getMessage();
        // }
    }

    public function success(Request $request)
    {
        print_r('success');
        // return response()->json(['message' => 'Payment successful']);
    }

    public function cancel(Request $request)
    {
        return response()->json(['message' => 'Payment canceled']);
    }
}
