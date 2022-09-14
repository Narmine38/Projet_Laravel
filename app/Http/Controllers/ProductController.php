<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listeProduits(){
        return view('product-list');
    }

    public function ficheduProduit($id): string
    {
        return view('product-details', ['id' => $id]);

    }



}
