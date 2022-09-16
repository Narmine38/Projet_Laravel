@extends('layouts/layout')

@section('content')

    @foreach ($product as $items)

        <div class="wrapper">
            <div class="product-img">
                <img src="{{$items->image}}" height="420" width="327">
            </div>
            <div class="product-info">
                <div class="product-text">
                    <h1>{{$items->name}}</h1>
                    <h2>by studio and friends</h2>
                    <p>{{$items->description}}</p>
                </div>
                <div class="product-price-btn">
                    <p><span>{{$items->price}}</p>
                    <button type="submit">Ajouter au panier</button>
                </div>
            </div>
        </div>

    @endforeach
@endsection
