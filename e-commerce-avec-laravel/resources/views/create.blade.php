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
  
    <form method="post" action="{{ route('cars.store') }}" enctype="multipart/form-data">
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
            <label for="file">Image </label>
            <input type="file" name="image" class="form-control"  onchange="previewFile(this)"/>
            <img id="previewImg" alt="" style="max-width: 130px; margin-top:20px;" />
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

    </div>
    </div>
    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).file[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</div>

@endsection