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

    public function detils(QuickShopOrder $quickShopOrder)
    {
        return view('admin.quickShop.order.details', compact('quickShopOrder'));
    }
}
