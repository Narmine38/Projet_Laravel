@extends('layouts/layout')

@section('content')

    <div class="wrapper">
        <div class="product-img">
            <img src="{{$product->image}}" height="566" width="327">
        </div>
        <div class="product-info">
            <div class="product-text">
                <h1>{{$product->name}}</h1>
                <h2>by studio and friends</h2>
                <p>{{$product->description}}</p>
            </div>
            <div class="product-price-btn container d-flex justify-content-center ">
                <form method="post" action="/cart">
                    @csrf
                    <div>
                        <span>{{number_format($product->price / (1 + $product->discount / 100),2)}}€</span>
                    </div>
                    <div class="d-flex flex-column">
                        <span>Stock:{{$product->stock}}</span>
                        <label for="quantity">Quantités</label>
                        <label class="justify-content-center">
                            <input style="" type="number" name="quantity" min="0" max="">
                            @error('quantity')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </label>
                        <input type="hidden" name="product_name" value="{{$product->name}}"/>
                        <input type="hidden" name="product_price" value="{{$product->price}}"/>
                        <input type="hidden" name="product_weight" value="{{$product->weight}}"/>
                        <input type="hidden" name="product_id" value="{{$product->id}}"/>
                    </div>

                    <div>
                        <button style="" type="submit">Ajouter au panier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
