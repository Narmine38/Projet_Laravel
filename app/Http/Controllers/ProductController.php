<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listeProduits(){
        return "Liste des produits";
    }

    public function ficheduProduit($id): string
    {
        return "Fiche du produit"  . $id;
    }



}
