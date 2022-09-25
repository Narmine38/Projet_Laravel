<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('Cart', ['$product' => $product]);
    }
}
