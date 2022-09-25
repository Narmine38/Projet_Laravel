<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;

class OrderController extends Controller
{


    public function index()
    {
        $orders = Order::all();

        return view('.backoffice.order.backOfficeOrders', ['orders' => $orders,]);


    }
}
