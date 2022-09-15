@extends('layouts/layout')

@section('content')
    <div class="container-xxl d-flex justify-content-center  p-2  border rounded mt-2 bg-dark">

        <div class="col-md-3 mt-1">
            <img class="" src="" alt="livre">
        </div>

        <div class="col-md-6 mt-1">
            <h5 class="text-white"></h5>
            <div class="d-flex flex-row text-white">
                <span>Nombre de pages: </span>
            </div>
            <div class="mt-1 mb-1 spec-1">
                <span>Date de parution: </span>
                <span class="dot"></span>
                <span>Editeur: </span>
                <span class="dot"></span>
                <span>Collection: <br></span>
            </div>
            <div class="mt-1 mb-1 spec-1">
                <span>Format:</span>
                <span class="dot"></span>
                <span>Auteur: </span>
                <span class="dot"></span>
                <span>Poids: <br></span>
            </div>
            <p class="text-justify text-truncate para mb-0 text-white-50"></p>
        </div>

        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
            <div class="d-flex flex-row align-items-center">
                <h4 class="mr-3 text-white"></h4>
                <span class="strike-text"></span>
                <h4 id="prixttc" class="mr-3 text-white"></h4>
                <span class="text-white" id="pourcent">%</span>
            </div>
            <h6 class="text-success">Livraison gratuite</h6>

            <label for="quantity"> quantity</label>
            <label class="justify-content-center">
                <input style="width: 200px" type="number" name="quantity" min="-10" max="10">
            </label>
            <input type="hidden" name="productsKeys" value="">
            <br>
            <div class="d-flex flex-column mt-4 ">
                <button style="width: 50%" class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
                <button style="width: 50%" class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button>
            </div>
        </div>
    </div>
@endsection
