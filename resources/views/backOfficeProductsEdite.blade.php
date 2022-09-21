@extends('layouts/layoutBackOffice')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Modifier un produit</h2>
        </div>
        <div class="panel-body">
            <form  action="/backoffice/{{$product->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="article">Article</label>
                    <input type="text" class="form-control" name="article" id="article" value="{{$product->name}}">
                </div>

                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{$product->description}}">
                </div>

                <div class="form-group">
                    <label for="Prix">Prix</label>
                    <input type="number" class="form-control" name="prix" id="prix" value="{{$product->price}}">
                </div>

                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{$product->image}}" >
                </div>

                <div class="form-group">
                    <label for="Poids">Poids</label>
                    <input type="number" class="form-control" name="poids" id="poids" value="{{$product->weight}}" p>
                </div>


                <div class="form-group">
                    <label for="Promotion">Promotion</label>
                    <input type="number" class="form-control" name="promotion" id="promotion" value="{{$product->discount}}">
                </div>

                <div class="form-group">
                    <label for="Stock">Stock</label>
                    <input type="number" class="form-control" name="Stock" id="Stock" value="{{$product->stock}}">
                </div>





                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
