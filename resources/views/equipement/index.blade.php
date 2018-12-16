@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container table-responsive" style="padding-top: 3%">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th class="text-center">Catégorie</th>
                <th class="text-center">Référence</th>
                <th class="text-center">Taille</th>
                <th class="text-center">Prix adulte</th>
                <th class="text-center">Prix enfant</th>
                <th class="text-center">Modifier</th>
                <th class="text-center">Supprimer</th>
            </tr>
            </thead>

            @foreach($equipements as $statement)
                <tr>
                    <td class="text-center">{{ $statement->libelle }}</td>
                    <td class="text-center">{{ $statement->idInterne }}</td>
                    <td class="text-center">{{ $statement->taille }} cm</td>
                    <td class="text-center">{{ $statement->prixAdulte }} €</td>
                    <td class="text-center">{{ $statement->prixEnfant }} €</td>
                    <td class="text-center">
                        <a href="/equipements/{{ $statement->id }}/edit">
                            <i class="fa fa-pencil" style="color:orange; font-size: 1.4em;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form name="delete_form" action="/equipements/{{ $statement->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <i id="btn-delete" class="fa fa-times" style="color:red; font-size: 1.4em;"></i>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection

@section('script')

@endsection
