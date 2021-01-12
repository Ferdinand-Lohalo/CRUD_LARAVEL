@extends('layout')
@section('content')
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
    <div class="uper">
        @if(session()->get('success')) {{-- condition pour l'affich du mssg success --}}
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Marque</td>
                    <td>Prix</td>
                    <td>Image</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($voitures as $voiture) {{-- condition pour faire afficher les données qui vinent de bd. --}}
                    <tr>
                        <td>{{$voiture->id}}</td>
                        <td>{{$voiture->marque}}</td>
                        <td>{{$voiture->prix}}</td>
                        <td> <img src="{{ asset('uploads/car/' .$voiture->image) }}" width="100px"></td> {{-- ce chemin permet d'achicher la photo --}}
                        <td><a href="{{ route('cars.edit', $voiture->id)}}" class="btn btn-success">Modifier</a></td>
                        <td>
                            <form action="{{ route('cars.destroy', $voiture->id)}}" method="post">
                                @csrf {{-- méthode tocken pour la sécurité des données dans le formulaire --}}
                                @method('DELETE') {{-- la méthode pour supprimer les fichiers dans la BD --}}
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div>
    </div>
@endsection