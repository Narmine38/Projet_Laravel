<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackController extends Controller
{

    public function index()
    {
        return view('backOffice');
    }

    public function products()
    {
        $products = Product::all();
        return view('backOfficeProducts', ['products' => $products]);
    }


    public function create()
    {
        return view('backOfficeAdd');
    }

    public function store(Request $request)
    {

        $product = new Product();

        $product->name = $request->input('article');
        $product->description = $request->input('description');
        $product->price = $request->input('prix');
        $product->image = $request->input('image');
        $product->quantity = $request->input('quantité');
        $product->discount = $request->input('promotion');
        $product->stock = $request->input('Stock');
        $product->weight = $request->input('poids');

        $product->save();

        return view('/backoffice');

    }

    public function delete($id)
    {
        $product = Product::Find($id);
        $product->delete();
        return redirect('/backoffice/products');

    }

    public function edite($id)
    {
        $product = Product::Find($id);
        return view('/backOfficeProductsEdite', ['product' => $product]);
    }

    public function update(Request $request, $id)

    {
        $product = Product::Find($id);
        $product->name = $request->input('article');
        $product->description = $request->input('description');
        $product->price = $request->input('prix');
        $product->image = $request->input('image');
        $product->discount = $request->input('promotion');
        $product->stock = $request->input('Stock');
        $product->weight = $request->input('poids');

        $product->save();

        return redirect('/backoffice/products');

    }




}
