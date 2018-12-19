@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Ajouter un équipement</h1>

        <form method="POST" action="{{ route('equipements.store') }}" class="form-group">
            @csrf
            <div class="row">
                <label for="categorie">Type de l'équipement</label>
                <select id="categorie" name="categoryId" class="custom-select custom-select-md">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <label for="identifiant">Identifiant de l'équipement</label>
                <input type="text" id="identifiant" name="internalId" class="form-control rounded">
            </div>
            <div class="row" style="margin-bottom: 1.2em">
                {{-- ToDo : Changer dynamiquement l'affichage s'il s'agit de chaussures --}}
                <label for="taille">Taille de l'équipement (en cm)</label>
                <input type="number" min="0" max="999" step="0.01" id="taille" name="size" class="form-control rounded">
            </div>
            <div class="row">
                <div class="offset-md-5">
                    <div class="col-md-2">
                        <input type="submit" value="Ajouter" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
