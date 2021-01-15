@extends('layout')
@section('content')
<br><br>

<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ asset('uploads/car/' .$voiture->image) }}" width="50%" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$voiture->marque}}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <h4>{{$voiture->getPrice()}}</h4>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <form action="{{ route('commande.store') }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" placeholder="Entrez la quantité de produit"><br>
            <button type="submit" class="btn btn-dark">Commander</button>
        </form>
        </div>
    </div>
</div>
@endsection