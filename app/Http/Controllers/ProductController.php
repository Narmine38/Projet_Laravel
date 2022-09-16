<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listeProduits()
    {
        $products = DB::select('SELECT * FROM `products`');
        return view('product-list', ['products' => $products]);
    }

    public function ficheduProduit($id)
    {
        $product = DB::select('SELECT * FROM `products` where id = ' . $id);
        return view('product-details', ['product' => $product]);

    }


}
