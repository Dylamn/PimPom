<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('acceuil') }}">RézaSki</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            @if (str_contains(Route::currentRouteName(), 'acceuil'))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('acceuil') }}">Acceuil <span class="sr-only">(current)</span></a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('acceuil') }}">Acceuil <span class="sr-only">(current)</span></a>
                </li>
            @endif
            @if (str_contains(Route::currentRouteName(), 'reserver'))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('reserver.index') }}">Réservation</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reserver.index') }}">Réservation</a>
                </li>
            @endif
            @if (str_contains(Route::currentRouteName(), 'reservation') || str_contains(Route::currentRouteName(), 'equipements') || str_contains(Route::currentRouteName(), 'categorie') || str_contains(Route::currentRouteName(), 'utilisateur'))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('reservation.index') }}">Administration</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.index') }}">Administration</a>
                </li>
            @endif
        </ul>
        <div class="links">
            @if (Route::has('login'))
                @auth
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->surname }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('home') }}" class="dropdown-item">Profil</a>
                            <a class="dropdown-item">...</a>
                            <button href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Déconnexion</button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    {{--<a href="{{ url('/home') }}">{{Auth::user()->firstName}}</a>--}}
                @else
                    <a href="{{ route('login') }}">Connexion</a>
                @endauth
            @endif
        </div>
    </div>
</nav>
