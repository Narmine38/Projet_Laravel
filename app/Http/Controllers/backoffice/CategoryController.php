<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categorys = Category::ALL();
        return view('.backoffice.category.backOfficeCategory', ['categorys' => $categorys]);
    }
}
