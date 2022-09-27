<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::with('products')->get();
        return view('.backoffice.category.backOfficeCategory', ['categories' => $categories]);
    }


}

