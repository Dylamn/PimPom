<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <ul class="list-unstyled components">
            @if(str_contains(Route::currentRouteName(), 'reservation'))
                <li class="active">
                    <a href="{{ route('reservation.index') }}">Réservations</a>
                </li>
            @else
                <li>
                    <a href="{{ route('reservation.index') }}">Réservations</a>
                </li>
            @endif
            @if(str_contains(Route::currentRouteName(), 'record'))
                <li class="active">
                    <a href="{{ route('record.index') }}">Archive</a>
                </li>
            @else
                <li>
                    <a href="{{ route('record.index') }}">Archive</a>
                </li>
            @endif
            @if(str_contains(Route::currentRouteName(), 'equipements'))
                <li class="active">
                    <a href="{{ route('equipements.index') }}">Équipements</a>
                </li>
            @else
                <li>
                    <a href="{{ route('equipements.index') }}">Équipements</a>
                </li>
            @endif
            @if(str_contains(Route::currentRouteName(), 'categorie'))
                <li class="active">
                    <a href="{{ route('categorie.index') }}">Catégories</a>
                </li>
            @else
                <li>
                    <a href="{{ route('categorie.index') }}">Catégories</a>
                </li>
            @endif
            @if(str_contains(Route::currentRouteName(), 'utilisateurs'))
                <li class="active">
                    <a href="{{ route('utilisateurs.index') }}">Utilisateurs</a>
                </li>
            @else
                <li>
                    <a href="{{ route('utilisateurs.index') }}">Utilisateurs</a>
                </li>
            @endif
        </ul>
        <ul class="list-unstyled text-center">
            @if(str_contains(Route::currentRouteName(), 'equipements'))
                <a href="{{ route('equipements.create') }}">
                    <button type="button" class="btn btn-outline-dark">Ajouter un équipement</button>
                </a>
            @elseif(str_contains(Route::currentRouteName(), 'category'))
                <a href="{{ route('categorie.create') }}">
                    <button type="button" class="btn btn-outline-dark">Ajouter une catégorie</button>
                </a>
            @elseif(str_contains(Route::currentRouteName(), 'utilisateurs'))
                <a href="{{ route('utilisateurs.create') }}">
                    <button type="button" class="btn btn-outline-dark">Ajouter un utilisateur</button>
                </a>
            @endif
        </ul>
    </nav>
</div>
