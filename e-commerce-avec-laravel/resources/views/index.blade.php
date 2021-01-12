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
        @if(session()->get('success'))
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
                @foreach($voitures as $voiture)
                    <tr>
                        <td>{{$voiture->id}}</td>
                        <td>{{$voiture->marque}}</td>
                        <td>{{$voiture->prix}}</td>
                        <td>{{$voiture->image}}</td>
                        <td><a href="{{ route('cars.edit', $voiture->id)}}" class="btn btn-success">Modifier</a></td>
                        <td>
                            <form action="{{ route('cars.destroy', $voiture->id)}}" method="post">
                                @csrf
                                @method('DELETE')
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