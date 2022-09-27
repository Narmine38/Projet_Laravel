<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product-list', ['products' => $products]);
    }

    public function show($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::find($id);
        $stock = $product->stock;
        return view('product-details', ['product' => $product , 'stock' => $stock]);

    }

    public function store(Request $request){
        $id = $request->input('product_id');
        $product = Product::find($id);

        $request->validate([

            'quantity' => 'required|numeric|max:' . $product->stock,
        ]);

        return view('cart');


    }





}
