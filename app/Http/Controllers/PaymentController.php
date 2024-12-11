<?php

namespace App\Http\Controllers;

use ShurjopayPlugin\Shurjopay;
use ShurjopayPlugin\PaymentRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public $sp_instance;
    /* Shurjopay injected in a constructor */
    public function __construct(Shurjopay $sp)
    {
        $this->sp_instance = $sp;
    }
   public function payment(){

       $payment_request = new PaymentRequest();

       $payment_request->currency = 'BDT';
       $payment_request->amount = 1000000000;
       $payment_request->discountAmount = '0';
       $payment_request->discPercent = '0';
       $payment_request->customerName = 'Mr. Piter';
       $payment_request->customerPhone = '01722222222';
       $payment_request->customerEmail = 'test@gmail.com';
       
       $payment_request->customerAddress = 'Dhaka';
       $payment_request->customerCity = 'Dhaka';
       $payment_request->customerState = 'Dhaka';
       $payment_request->customerPostcode = '1207';
       $payment_request->customerCountry = 'Bangladesh';
       $payment_request->shippingAddress = 'Sirajganj';
       $payment_request->shippingCity = 'Dhaka';
       $payment_request->shippingCountry = 'Bangladesh';
       $payment_request->receivedPersonName = 'Cris Gayle';
       $payment_request->shippingPhoneNumber = '01722222222';
       $payment_request->value1 = 'value1';
       $payment_request->value2 = 'value2';
       $payment_request->value3 = 'value3';
       $payment_request->value4 = 'value4';

       return $this->sp_instance->makePayment($payment_request);
   }
    public function verify_payment(Request $request){
        $order_id = $request->order_id;
        $response=$this->sp_instance->verifyPayment($order_id);
        print_r($response);exit;
    }
}








// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Raziul\Shurjopay\Facades\Shurjopay;

// class PaymentController extends Controller
// {
//     public function payment(Request $request)
//     {
//         // Generate a unique order ID
//         $orderId = uniqid('order_', true);

//         // Prepare data for the payment
//         $data = [
//             'currency' => "BDT",
//             'amount' => $request->input('amount'), // Ensure these fields exist in the request
//             'order_id' => $orderId,
//             'customer_name' => "customer_name",
//             'customer_address' => 'address',
//             'customer_phone' => $request->input('phone'),
//             'customer_email' => $request->input('email'),
//             'customer_city' => 'dhaka',
//             'transaction_id' => uniqid('trx_') // Generate a unique transaction ID
//         ];
//         // dd($data);

//         // Set the callback URLs
//         $success_url = route('payment.successfull'); // Ensure this route exists
//         $cancel_url = route('payment.cancel');   // Ensure this route exists

//             $request = new PaymentRequest($data);
//             $shurjopay_service = new Shurjopay();
//             return $shurjopay_service->makePayment($request);

//         // if(Shurjopay::setCallbackUrl($success_url, $cancel_url)){
//         //     Shurjopay::setCallbackUrl($success_url, $cancel_url)->makePayment($data);
//         //     dd('success');
//         // }else{
//         //     print_r('not');
//         // }

//         // Set callback URLs and make payment

//         // try {
//         //     Shurjopay::setCallbackUrl($success_url, $cancel_url)->makePayment($data);
           
//         // } catch (\Exception $e) {
//         //     return $e->getMessage();
//         // }
//     }

//     public function success(Request $request)
//     {
//         print_r('success');
//         // return response()->json(['message' => 'Payment successful']);
//     }

//     public function cancel(Request $request)
//     {
//         return response()->json(['message' => 'Payment canceled']);
//     }
// }
