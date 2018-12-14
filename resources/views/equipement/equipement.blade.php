@extends('equipement.template')

@section('contenu')
    <table class="table table-striped">
        <thead>
        <tr class="alert-success">
            <td>Catégorie</td>
            <td>Référence</td>
            <td>Taille</td>
            <td>Prix adulte</td>
            <td>Prix enfant</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>
        </thead>


        @foreach($stock as $statement)
            <tr>
                <td>{{ $stock->libelle }}</td>
                <td>{{ $stock->idInterne }}</td>
                <td>{{ $stock->taille }}</td>
                <td>{{ $stock->prixAdulte }}</td>
                <td>{{ $stock->prixEnfant }}</td>
                <td><span class="glyphicon glyphicon-pencil" style="color:orange"></span></td>
                <td><span class="glyphicon glyphicon-remove" style="color:red"></span></td>
            </tr>
        @endforeach

    </table>

@endsection
