@extends('layouts.layoutBackOffice')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Client</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->number}}</td>
                    <td>{{$order->date}}</td>
                    <td>{{$order->customer->first_name}}  {{$order->customer->last_name}}</td>
                    <td>{{$order->customer->address}}  {{$order->customer->postal_code}}  {{$order->customer->city}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
