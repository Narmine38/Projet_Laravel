@extends('layouts/layout')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Arictle</th>
                <th scope="col">Prix</th>
                <th scope="col">Poid</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->weight}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection
