@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Ajouter une catégorie</h1>

        <form method="POST" action="/categories" class="form-group">
            @csrf
            <div class="row">
                <label for="label">Libellé de la catégorie</label>
                <input type="text" id="label" name="label" class="form-control rounded">
            </div>
            <div class="row">
                <label for="adultPrice">Prix adulte des équipements de la catégorie</label>
                <input type="number" min="0" step="0.01" id="prixAdulte" name="prixAdulte" class="form-control rounded">
            </div>
            <div class="row" style="margin-bottom: 1.2em">
                <label for="childrenPrice">Prix enfant des équipements de la catégorie</label>
                <input type="number" min="0" step="0.01" id="prixEnfant" name="prixEnfant" class="form-control rounded">
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
