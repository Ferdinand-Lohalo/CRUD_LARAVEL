@extends('layout')

@section('content')
    <br><br><br><br><br>
    <div class="container" style="background-color: white; width: 50%; box-shadow: 5px 3px 15px #837c7c; border-radius: 10px">
        <h1 style="text-align: center">Choississez une option pour l'administration de vos données</h1>
        <hr>
        <br>
       <a href="/create" style="width:100%; border-radius: 10px 100px / 120px;" class="btn btn-outline-primary nav-link">Ajouter une nouvelle voiture</a>
       <br><br>
        <a style="width:100%; border-radius: 10px 100px / 120px;" class="btn btn-outline-primary nav-link" href="cars"> Liste des voitures disponibles</a>
        <br><br>
    </div>
@stop