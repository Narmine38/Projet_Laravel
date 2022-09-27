@extends('layouts/layout')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Arictle</th>
                <th scope="col">Prix</th>
                <th scope="col">Poids</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Poids Total</th>
            </tr>
            </thead>
            <tbody>
                <tr>
{{--                    <td>{{$product->name}}</td>--}}
{{--                    <td>{{number_format($product->price)}}€</td>--}}
{{--                    <td>{{$product->weight}}kg</td>--}}
{{--                    <td>{{$quantity}}</td>--}}
{{--                    <td>{{number_format($product->price * $quantity)}}€</td>--}}
{{--                    <td>{{$product->weight * $quantity}}kg</td>--}}
                </tr>
            </tbody>

        </table>
    </div>

    @endsection
