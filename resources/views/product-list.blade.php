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
                        <p><span>{{$product->price}}</p>
                    </div>
                </div>
            </div>

    @endforeach

@endsection
