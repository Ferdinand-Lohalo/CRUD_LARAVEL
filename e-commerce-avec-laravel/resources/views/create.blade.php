@extends('layout')

@section('content')
<div class="container">
    <style>
        .uper {
        margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            <h1>Ajouter une Voiture dans la base des donnnées</h1>
        </div>
        <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
  
    <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="marque">Marque de Voiture:</label>
            <input type="text" class="form-control" name="marque"/>
        </div>

        <div class="form-group">
            <label for="prix">Prix :</label>
            <input type="text" class="form-control" name="prix"/>
        </div>

        <div class="form-group">
            <div class="custom-file">
                <label for="file" class="custom-file-label">Chosir une image</label>
                <input type="file" name="image" class="custom-file-input"/>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
    </form>

    </div>
    </div>
</div>

@endsection