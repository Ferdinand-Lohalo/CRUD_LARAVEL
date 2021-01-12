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
                            @foreach ($errors->all() as $error) {{-- cond pour afficher le mssg error --}}
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="POST" action="{{ route('cars.update', $car->id ) }}" enctype="multipart/form-data">
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
                    
                    <div class="form-group">
                        <div class="custom-file">
                            <label for="file" class="custom-file-label">Chosir une image</label>
                            <input type="file" name="image" class="custom-file-input" value="{{ $car->image }}"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" style="width: 100%">Modifier</button>
                </form>
            </div>
        </div>
    </div>
@endsection