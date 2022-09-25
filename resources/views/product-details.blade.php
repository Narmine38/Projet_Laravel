@extends('layouts/layout')

@section('content')

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
                    <form method="post" action="/cart">
                        <label for="quantity"> quantity</label>
                        <label class="justify-content-center">
                            <input style="width: 200px" type="number" name="quantity" min="-10" max="10">
                        </label>
                        <input type="hidden" name="product_name" value="{{$product->name}}" />
                        <input type="hidden" name="product_price" value="{{$product->price}}" />
                        <input type="hidden" name="product_weight" value="{{$product->weight}}" />
                        @csrf
                        <button  type="submit">Ajouter au panier</button>
                    </form>

                </div>
            </div>
        </div>


@endsection
