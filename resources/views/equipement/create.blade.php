@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

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

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
@endsection
