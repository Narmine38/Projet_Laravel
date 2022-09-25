@extends('layouts.layoutBackOffice')

@section('content')
    <div class="container d-flex">
        <div class="container d-flex justify-content-center mb-5 mt-5">
            <a class="btn btn-primary" href="{{'/backoffice/orders'}}" role="button">Commandes</a>
        </div>
        <div class="container d-flex justify-content-center mb-5 mt-5">
            <a class="btn btn-primary" href="{{'/backoffice/products/add'}}" role="button">Ajouter un Produit</a>
        </div>
        <div class="container d-flex justify-content-center mb-5 mt-5">
            <a class="btn btn-primary" href="{{'/backoffice/category'}}" role="button">Categories</a>
        </div>
        <div class="container d-flex justify-content-center mb-5 mt-5">
            <a class="btn btn-primary" href="{{'/backoffice/customer'}}" role="button">Clients</a>
        </div>
    </div>

    @foreach ($products as $product)

        <div class="wrapper">
            <div class="product-img">
                <img src="{{$product->image}}" height="420" width="327">
            </div>
            <div class="product-info">
                <div class="product-text">
                    <h1>{{$product->name}}</h1>
                    <h2>by studio and friends</h2>
                    <p>{{$product->description}}</p>
                </div>
                <div class="product-price-btn">
                    <p><span>{{$product->price}}</p>
                </div>
                <div class="d-flex flex-row">
                    <a class="btn btn-primary" href="/backoffice/products/edite/{{$product->id}}"
                       role="button">Modifier</a>
                    <form method="post" action="/backoffice/{{$product->id}}/delete">
                        @method('delete')
                        @csrf
                        <button class="btn btn-primary" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>

    @endforeach
@endsection
