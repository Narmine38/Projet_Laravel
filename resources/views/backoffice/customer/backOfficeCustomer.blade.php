@extends('layouts.layoutBackOffice')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Date</th>
                <th scope="col">Client</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->first_name}}{{$customer->last_name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->postal_code}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
