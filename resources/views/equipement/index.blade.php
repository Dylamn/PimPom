@extends('layouts.master')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr class="alert-success">
                <td class="text-center">Catégorie</td>
                <td class="text-center">Référence</td>
                <td class="text-center">Taille</td>
                <td class="text-center">Prix adulte</td>
                <td class="text-center">Prix enfant</td>
                <td class="text-center">Modifier</td>
                <td class="text-center">Supprimer</td>
            </tr>
            </thead>

            @foreach($equipements as $statement)
                <tr>
                    <td class="text-center">{{ $statement->libelle }}</td>
                    <td class="text-center">{{ $statement->idInterne }}</td>
                    <td class="text-center">{{ $statement->taille }}</td>
                    <td class="text-center">{{ $statement->prixAdulte }}</td>
                    <td class="text-center">{{ $statement->prixEnfant }}</td>
                    <td class="text-center">
                        <a href="/equipements/{{ $statement->id }}/edit">
                            <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="/equipements/{{ $statement->id }}">
                            <span class="fa fa-times" style="color:red; font-size: 1.4em;"></span>
                        </a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
