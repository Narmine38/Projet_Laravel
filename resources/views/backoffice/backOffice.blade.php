@extends('layouts.layoutBackOffice')

@section('content')
    <div class="container d-flex justify-content-center mb-5 mt-5">
        <a class="btn btn-primary" href="{{'/backoffice/products'}}" role="button">Produits</a>
    </div>
    <div class="container d-flex justify-content-center mb-5 mt-5">
        <a class="btn btn-primary" type="submit" href="{{'/backoffice/customers'}}" role="button">Cliens</a>
    </div>
    <div class="container d-flex justify-content-center mb-5 mt-5">
        <a class="btn btn-primary" href="{{'/backoffice/orders'}}" role="button">Commandes</a>
    </div>
@endsection





