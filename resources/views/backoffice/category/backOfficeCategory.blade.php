@extends('layouts.layoutBackOffice')

@section('content')

    @foreach($categories as $category)
        <h2>{{$category->name}}</h2>
        @foreach($category->products as $product)
            <div class="wrapper ">
                <div class="product-img">
                    <img src="{{$product->image}}" height="566" width="327">
                </div>
                <div class="product-info">
                    <div class="product-text">
                        <h1>{{$product->name}}</h1>
                        <h2>by studio and friends</h2>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="product-price-btn">
                        <p>{{number_format($product->price,2,",",".") . '€'}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach

    @endsection
