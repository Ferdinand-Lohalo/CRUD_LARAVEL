@extends('layout')
@section('content')
<br><br>

<div class="container">
     {{-- Message en cas d'erreur --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
        {{-- Message de succès en cas d'opération réussit --}}
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    <br/>
    @endif

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ asset('uploads/car/' .$voiture->image) }}" width="50%" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$voiture->marque}}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <h4>{{$voiture->prix }}</h4>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <form name="commande" action="{{ route('commande.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="" class="form-control"><br>
            <input type="hidden" name="prix_total" value="{{ sommePrix() }}" class="form-control"><br>
            <input type="number" name="quantite" value="" class="form-control" placeholder="Entrez la quantité de produit"><br>
            <button type="submit" class="btn btn-dark">Commander</button>
        </form>
        </div>
    </div>
</div>
@endsection