<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        return view('product-details', ['product' => $product[0], 'id' => $id]);

    }

    public function byName()
    {
        $products = Product::orderBy('name')->get();
        return view('product-by-name', ['products' => $products]);

    }

    public function byPrice()
    {
        $products = Product::orderBy('price', 'desc')->get();
        return view('product-by-price', ['products' => $products]);
    }

    public function byPriceName($id)
    {
        $product = Product::find($id);
        return view('product-name-price', ['product' => $product]);


    }

    public function page404()
    {
        return view('404');
    }
}
