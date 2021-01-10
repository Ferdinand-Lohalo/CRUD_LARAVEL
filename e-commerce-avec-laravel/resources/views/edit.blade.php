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
                <h3>Modifier la voiture</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('cars.update', $car->id ) }}">
                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <label for="marque">Marque :</label>
                        <input type="text" class="form-control" name="marque" value="{{ $car->marque }}"/>
                    </div>
                    <div class="form-group">
                        <label for="cases">Prix :</label>
                        <input type="text" class="form-control" name="prix" value="{{ $car->prix }}"/>
                    </div>
                    
                    <button type="submit" class="btn btn-success" style="width: 100%">Modifier</button>
                </form>
            </div>
        </div>
    </div>
@endsection