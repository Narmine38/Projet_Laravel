<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;

class Order_productController extends Controller
{
    public function index()
    {
        $ordersProduct = OrderProduct::all();
        return view('.backoffice.order.backOfficeOrdersProduct', ['ordersProduct' => $ordersProduct]);


    }
}
