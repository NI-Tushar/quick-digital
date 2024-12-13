<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $request->validate([
            'book_id' => 'required|string',
            'book_title' => 'required|string',
            'phone' => [
                'required',
                'regex:/^(?:\+?88)?01[3-9]\d{8}$/',
            ],
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
                'max:255'
            ],
            'price' => 'required',

        ], [
            'book_id.required' => 'কোনো বুক আইডি পাওয়া যায়নি',
            'phone.required' => 'মোবাইল নম্বর দিন',
            'phone.regex' => 'সঠিক বাংলাদেশি মোবাইল নম্বর দিন',
            'email.required' => 'ইমেইল এড্রেস দিন',
            'email.regex' => 'সঠিক ইমেইল এড্রেস দিন',
        ]);

        // dd($request->all());


        

        try {

            $merchant_name = config('surjopay.merchant_name');
            $merchant_password = config('surjopay.merchant_password');
            $merchant_prefix = config('surjopay.merchant_prefix');
            $get_token_url = config('surjopay.get_token_url');

    

            $data = [
                'username' => $merchant_name,
                'password' => $merchant_password,
            ];
                


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $get_token_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
            ]);


            $response = curl_exec($ch);
            $error = curl_error($ch);
            curl_close($ch);

            $responseObject = json_decode($response, true);

            if ($error) {
                echo 'cURL Error: ' . $error;
            } else {
                $response_data = json_decode($response, true);
                if (isset($response_data['token'])) {
                    // echo 'Token: ' . $response_data['token'];
                    $res = $this->createPayment($responseObject, $request);
                    if (isset($res['checkout_url']) && $res['checkout_url'] != null) {
                        return redirect()->away($res['checkout_url']);
                        //For Inertia Js, Use this to avoid whole tab opening as modal
                        return inertia()->location($res['checkout_url']);
                    }else{

                        // return redirect()->route('home')->with('error','Payment Generation Failed');
                        print_r('Payment Generation Failed');
                    }

                } else {
                    echo 'Token Generation Failed: ' . $response;
                }
            }

        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }

    protected function createPayment($response, Request $request)
    {
       
        $book_id =  $request->input('book_id');
        $book_title =  $request->input('book_title');
        $phone =  $request->input('phone');
        $email =  $request->input('email');
        $price =  $request->input('price');

        
        try {
            
            $token = $response['token'];
            $store_id   = $response['store_id'];
            $authorizationToken = "Bearer $token";
            $order_id = rand(000000000000,999999999999);

            session()->put('token', $token);
            
            // ____________________ store order details
            session()->put('order_id', $order_id);
            session()->put('book_id', $book_id);
            session()->put('book_title', $book_title);
            session()->put('phone', $phone);
            session()->put('email', $email);
            session()->put('price', $price);

            $curl = curl_init();
            
            $secretpay_url = config('surjopay.secretpay_url');
            $merchant_prefix = config('surjopay.merchant_prefix');

            curl_setopt_array($curl, array(
                CURLOPT_URL => $secretpay_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                "prefix": "'.$merchant_prefix.'",
                "token": "'.$token.'",
                "return_url": "'.route('payment.success').'",
                "cancel_url": "'.route('payment.cancel').'",
                "store_id": "'.$store_id.'",
                "amount": "'.$price.'",
                "order_id": "'.$order_id.'",
                "currency": "BDT",
                "customer_name": "Name, Not Provided",
                "customer_address": "Address, Not Provided",
                "customer_phone": "'.$phone.'",
                "customer_city": "City, Not provided",
                "customer_post_code": "none",
                "client_ip": "102.101.1.1",
                "discount_amount": "0",
                "disc_percent": "",
                "customer_email": "'.$email.'",
                "customer_state": "Bangladesh",
                "customer_postcode": "7200",
                "customer_country": "Bangladesh",
                "shipping_address": "Jhenaidah, Khulna, Bangladesh",
                "shipping_city": "Jhenaidah",
                "shipping_country": "Bangladesh",
                "received_person_name": "Reciver Name",
                "shipping_phone_number": "01700000000",
                "value1": "test value1",
                "value2": "",
                "value3": "",
                "value4": "",
                "type": "json"
            }',
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: $authorizationToken",
                ),
            ));

            $res = curl_exec($curl);

            curl_close($curl);
            $resObject = json_decode($res, true);
            
            return $resObject;

        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function success(Request $request)
    {

  
        try {
            if (isset($request['order_id']) && $request['order_id'] != null) {

                $verific_url = config('surjopay.verific_url');

                $token = session()->get('token');
                $order_id = $request['order_id'];
                $authorizationToken = "Bearer $token";

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => $verific_url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS =>'{
                        "order_id": "'.$order_id.'",
                        "type": "json"
                    }',
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Authorization: $authorizationToken",
                    ),
                ));

                $res = curl_exec($curl);

                // if (curl_errno($curl)) {
                //     // Log cURL error
                //     $error_msg = curl_error($curl);
                //     dd("cURL Error: " . $error_msg);
                // }

                curl_close($curl);

                $resObject = json_decode($res, true);

                if($resObject[0]['sp_message']=="Success"){                                                                                                               

                            session()->forget('token');
                    
                            // __________________________________________________ STORING USER ORDER DATA INTO TABLE AFTER COMPLETING ORDER START
                            $order_id = session()->get('order_id');
                            $book_id = session()->get('book_id');
                            $book_title = session()->get('book_title');
                            $phone = session()->get('phone');
                            $email = session()->get('email');
                            $price = session()->get('price');

                            // _______________________Genereting a default or random password to store and mail
                            if (!Auth::guard('user')->check()) { 
                                $existing_user = User::where('email', $email)->first();

                                if ($existing_user) {  // WHEN UESR ALREADY REGISTERED   
                                        $user_id = $existing_user->id;                     
                                        $phone = $existing_user->mobile;                     
                                        $email = $existing_user->email;    

                                        session()->put('user_id', $user_id);
                                        session()->put('phone', $phone);
                                        session()->put('email', $email);
                                        // Call the SMS controller method
                                        $smsController = new SmsController();
                                        $smsSent = $smsController->sendSms($phone, $order_id, $name, $package_name, $delivery_time);
                                        

                                    }else{
                                        // creating default pass
                                        $length = 12;
                                        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
                                        $charactersLength = strlen($characters);
                                        $randomPassword = '';
                                            for ($i = 0; $i < $length; $i++) {
                                                $randomPassword .= $characters[random_int(0, $charactersLength - 1)];
                                            }
                                        session()->put('default_pass', $randomPassword);  //=========== send this password in user email and number
                                        $add_user= new User();
                                        $add_user->name= $name;
                                        $add_user->mobile= $phone;
                                        $add_user->email= $email;
                                        $add_user->password= bcrypt($randomPassword);
                                        $add_user->save(); // save newly created user_id into session

                                        $user_id = $add_user->id;
                                        session()->put('user_id', $user_id);
                                        // Call the SMS controller method
                                        $smsController = new SmsController();
                                        $smsSent = $smsController->sendSmsNewUser($phone, $order_id,$name, $package_name, $delivery_time, $email, $randomPassword);
                                         
                                    }
                                }else{
                                    // ALREADY LOGGED IN

                                    // sending confirmation sms
                                    $smsController = new SmsController();
                                    $smsSent = $smsController->sendSms($phone, $order_id,$name, $package_name, $delivery_time);

                                    $user_id = Auth::guard('user')->id();
                                    session()->put('user_id', $user_id);
                                }
                        
                    
                            // __________________ here data will be store in order page
                            $user_id = session()->get('user_id');
                    
                            $add_cart= new Cart();
                            $add_cart->user_id= $user_id;
                            $add_cart->order_id= $order_id;
                            $add_cart->book_id= $book_id;
                            $add_cart->package_name= $package_name;
                            $add_cart->delivery_time= $delivery_time;
                            $add_cart->book_title= $book_title;
                            $add_cart->service_type= $service_type;
                            $add_cart->price= $price;
                            $add_cart->user_name= $name;
                            $add_cart->phone= $phone;
                            $add_cart->email= $email;
                            $add_cart->bank_trx_id= $resObject[0]['bank_trx_id'];
                            $add_cart->invoice_no= $resObject[0]['invoice_no'];
                            $add_cart->transaction_status= $resObject[0]['transaction_status'];
                            $add_cart->method= $resObject[0]['method'];
                            $add_cart->sp_massage= $resObject[0]['sp_message'];
                            $add_cart->save();
                    

       
                        
                            // __________ sending order info to customer mail
                            return redirect()->route('mailsend', [
                                'name' => $name,
                                'order_id' => $order_id,
                                'book_title' => $book_title,
                                'package_name' => $package_name,
                                'price' => $price,
                                'user_email' => $email,
                            ]);

                            


                }else{

                    return view('wise_corporation.payment_pages.cancelPay');

                    // GO TO THE FAILED PAGE
                    session()->forget('token');

                }

                // if (!$resObject) {
                //     dd("Invalid JSON response: ", $res); // Log raw response
                // }
                
         



            }
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function successPay($order_id, $book_id, $package_name,  $delivery_time, $book_title, $service_type, $order_cust_price, $order_cust_name, $order_cust_phone, $order_cust_email)
    {
       
        return view('wise_corporation.payment_pages.successPay',[
            'order_id' => $order_id,
            'package_name' => $package_name,
            'delivery_time' => $delivery_time,
            'price' => $order_cust_price,
            'order_cust_email' => $order_cust_email,
            'book_title' => $book_title,
            'service_type' => $service_type
        ]);


          // __________________
    }

    public function cancel()
    {
        dd('success');
        return view('wise_corporation.payment_pages.cancelPay');
    }

}
