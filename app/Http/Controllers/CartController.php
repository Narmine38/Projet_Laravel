<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        $deliverys = Compagnie::all();
        $quantity = $_POST['quantity'];

//       dd($product, $quantity, $deliverys);

        return view('cart', ['deliverys' => $deliverys, 'quantity' => $quantity]);
    }




}
