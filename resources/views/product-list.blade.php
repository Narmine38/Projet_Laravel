@extends('layouts/layout')

@section('content')

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
                    <p><span>{{number_format($product->price,2,",",".") . '€'}}</p>
                    <a style="margin-top: 50px; margin-left: 40px" href="/product/{{$product->id}}"
                       class="btn btn-primary" role="button" data-bs-toggle="button">Voir plus</a>
                </div>
            </div>

        </div>

    @endforeach

@endsection
