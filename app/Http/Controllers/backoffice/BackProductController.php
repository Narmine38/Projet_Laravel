<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BackProductController extends Controller
{

    public function home(): View
    {
        return view('backOffice.backOffice');
    }

    public function index(): View
    {
        $products = Product::all();
        return view('backOffice.product.backOfficeProducts', ['products' => $products]);
    }


    public function create(): View
    {
        return view('backoffice.product.backOfficeAdd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'article' => 'bail|required',
            'prix' => 'required|numeric|gt:0',
        ]);
//        dd($request->all());
        $product = new Product();

        $product->name = $request->input('article');
        $product->description = $request->input('description');
        $product->price = $request->input('prix');
        $product->image = $request->input('image');
        $product->discount = $request->input('promotion');
        $product->stock = $request->input('Stock');
        $product->weight = $request->input('poids');
        $product->category_id = $request->input('categories');
        $product->author_id = $request->input('author');
        $product->collection = $request->input('collection');

        $product->save();

        return view('backOffice.backOffice');

    }

    public function destroy($id)
    {
        $product = Product::Find($id);
        $product->delete();
        return redirect('/backoffice/products');

    }

    public function edite($id)
    {
        $product = Product::Find($id);
        return view('backoffice.product.backOfficeProductsEdite', ['product' => $product]);
    }

    public function update(Request $request, $id)

    {
        $request->validate([
            'article' => 'required',
//            'description' => 'required',
            'prix' => 'required|numeric|gt:0',
//            'image' => 'required',
//            'promotion' => 'required',
//            'Stock' => 'required',
//            'poids' => 'required',
//            'categories' => 'required',
//            'author' => 'required',
//            'collection' => 'required',
        ]);
//        dd($request->all());

        $product = Product::Find($id);
        $product->name = $request->input('article');
        $product->description = $request->input('description');
        $product->price = $request->input('prix');
        $product->image = $request->input('image');
        $product->discount = $request->input('promotion');
        $product->stock = $request->input('Stock');
        $product->weight = $request->input('poids');
        $product->category_id = $request->input('categories');
        $product->author_id = $request->input('author');
        $product->collection = $request->input('collection');

        $product->save();


        return redirect('/backoffice/products');

    }


}
