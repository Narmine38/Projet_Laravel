@extends('layouts.layoutBackOffice')

@section('content')

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">quantity</th>
                    <th scope="col">order_id</th>
                    <th scope="col">product_id</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ordersProduct as $order)


                @endforeach
                </tbody>
            </table>
        </div>

@endsection
