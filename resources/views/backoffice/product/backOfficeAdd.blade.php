@extends('layouts.layoutBackOffice')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter un produit</h2>
        </div>
{{--        @if(count($errors->any()))--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <sapn class="text-danger">{{$error}}</sapn>--}}
{{--            @endforeach--}}
{{--        @endif--}}
        <div class="panel-body">
            <form class="" action="/backoffice" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="article">Article</label>
                    <input type="text" class="form-control" name="article" id="article" placeholder="">
                    @error('article')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="">
                </div>

                <div class="form-group">
                    <label for="Prix">Prix</label>
                    <input type="number" class="form-control" name="prix" id="prix" placeholder="">
                    @error('prix')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="">
                </div>

                <div class="form-group">
                    <label for="Promotion">Promotion</label>
                    <input type="number" class="form-control" name="promotion" id="promotion" placeholder="">
                </div>

                <div class="form-group">
                    <label for="Stock">Stock</label>
                    <input type="number" class="form-control" name="Stock" id="Stock" placeholder="">
                </div>

                <div class="form-group">
                    <label for="Poids">Poids</label>
                    <input type="number" class="form-control" name="poids" id="poids" placeholder="">
                </div>


                <div class="form-group">
                    <label for="categories">categories</label>
                    <input type="number" class="form-control" name="categories" id="categories" placeholder="">
                </div>

                <div class="form-group">
                    <label for="Auteur">Auteur</label>
                    <input type="number" class="form-control" name="author" id="author" placeholder="">
                </div>


                <div class="form-group">
                    <label for="collection">collection</label>
                    <input type="text" class="form-control" name="collection" id="collection" placeholder="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
