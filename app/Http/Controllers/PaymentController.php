<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProducts;
use App\Models\CartSubscription;
use App\Models\Ebook;
use App\Models\Order;
use App\Models\OrderProducts;
use App\Models\OrderStatus;
use App\Models\OrderStatusProduct;
use App\Models\OrderSubscription;
use App\Models\Products;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

use Shurjomukhi\ShurjopayLaravelPlugin\Http\Controllers\Shurjopay;
use Shurjomukhi\ShurjopayLaravelPlugin\Http\Controllers\TransactionClasses\PaymentRequest;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $request->validate(
            [
                'name'=> 'required|max:100',
                'address'=> 'required',
                'phone'=> 'required',
                'email'=> 'required',
                'amount'=> 'required',
                ]
            );
            
            $name = $request['name'];
            $address = $request['address'];
            $phone = $request['phone'];
            $email = $request['email'];
            $amount = $request['amount'];
            
            // dd($request->all());


            $requestArray = array($request->all());
            $request = new PaymentRequest($requestArray);
            $shurjopay_service = new Shurjopay();
            return $shurjopay_service->makePayment($request);

            // $shurjopay_service = new ShurjopayService();
            // $tx_id = $shurjopay_service->generateTxId();
            // $success_route = route('/payment/success');

            // $data=array(
            //     'currency'=>"BTD",
            //     'amount'=>$request['amount'],
            //     'order_id'=>"lfhnjfurhgdhjf",
            //     'name'=>$request['name'],
            //     'address'=>$request['address'],
            //     'phone'=> $request['phone'],
            //     'email'=> $request['email']
            // );

            // $shurjopay_service->sendPayment($data, $success_route);
    }

}
