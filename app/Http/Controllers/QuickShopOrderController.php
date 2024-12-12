<?php

namespace App\Http\Controllers;

use App\Models\QuickShopOrder;
use Illuminate\Http\Request;

class QuickShopOrderController extends Controller
{
    public function index()
    {
        $orders = QuickShopOrder::latest()->paginate(50);
        return view('admin.quickShop.order.index', compact('orders'));
    }

    public function details(QuickShopOrder $quickShopOrder)
    {
        $order = $quickShopOrder;

        // Calculate subtotal from related items
        $subTotal = $order->items->sum('total');

        // Define fixed shipping cost
        $shipping = 120;

        // Calculate total with or without a coupon
        $total = $subTotal + $shipping - ($order->coupon ?? 0);

        // Pass calculated values to the view
        return view('admin.quickShop.order.details', compact('order', 'subTotal', 'shipping', 'total'));
    }


    public function paymentStatus(Request $request, QuickShopOrder $quickShopOrder)
    {
        $quickShopOrder->payment_status = $request->payment_status;
        $quickShopOrder->save();

        return redirect()->back()->with('success', 'Payment Status updated successfully!');
    }

    public function orderStatus(Request $request, QuickShopOrder $quickShopOrder)
    {
        $quickShopOrder->delivery_status = $request->delivery_status;
        $quickShopOrder->save();

        return redirect()->back()->with('success', 'Order Status updated successfully!');
    }
}
