<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <ul class="list-unstyled components">
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
            @if(str_contains(Route::currentRouteName(), 'user'))
                <li class="active">
                    <a href="{{ route('user.index') }}">Utilisateurs</a>
                </li>
            @else
                <li>
                    <a href="{{ route('user.index') }}">Utilisateurs</a>
                </li>
            @endif
        </ul>
    </nav>
</div>
