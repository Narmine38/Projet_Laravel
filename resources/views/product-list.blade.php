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
                    <h2>{{$product->category->name}}</h2>
                    <h2>by studio and friends</h2>
                    <p>{{$product->description}}</p>
                </div>
                <div class="product-price-btn">
                    @if ($product->discount > null)
                        <div class="d-flex align-items-center justify-content-around">
                            <span class="text-decoration-line-through">{{number_format($product->price,2,",",".") . '€'}}</span>
                            <span class="text-danger">{{$product->discount}}%</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-around">
                        <span>{{number_format($product->price / (1 + $product->discount / 100),2)}}€</span>
                    @else
                        <span>{{number_format($product->price,2,",",".") . '€'}}</span>
                    @endif
                        <a href="/product/{{$product->id}}" class="btn btn-primary" role="button" data-bs-toggle="button">Voir plus</a>
                        </div>
                </div>
            </div>

        </div>

    @endforeach

@endsection
