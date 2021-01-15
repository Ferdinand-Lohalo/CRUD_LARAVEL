@extends('layout')
@section('content')

{{-- <div class="container">
   @include('detail');
</div> --}}

<div class="container">
    <style>
        .uper {
        margin-top: 40px;
        }
    </style>
    <br><br>
    <div class="container">
        <h3>Modele des voitures actuellement sur le marché et leurs prix!</h3>
        <hr>
    </div>

<div class="card-deck">
    <div class="row">
        @foreach($voitures as $voiture) 
            <div class="card">
                <img src="{{ asset('uploads/car/' .$voiture->image) }}" width="100%" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$voiture->marque}}</h5>
                <p class="card-text">This is a longer card with .</p>
                <h4>{{$voiture->prix}}</h4>
                {{-- <p>Ajouter le <small class="text-muted">{{ $voiture->created_at->format('d/m/Y') }}</small></p> --}}
                <a href="{{ route('cars.show', $voiture->id) }}" class="btn btn-primary">Detail</a>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection