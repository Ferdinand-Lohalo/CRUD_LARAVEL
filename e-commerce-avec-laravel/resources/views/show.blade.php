@extends('layout')
@section('content')
<br><br>
    <div class="container">
        <div class="card mb-3" style="max-width: 600px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('uploads/car/' .$voiture->image) }}" height="80%" width="50%" class="card-img-top">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{ $voiture->marque }}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <h6>Le coût revient à: <strong> {{$voiture->prix}} </strong></h6>
                <p>Ajouter le <small class="text-muted">{{ $voiture->created_at->format('d/m/Y') }}</small></p>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection