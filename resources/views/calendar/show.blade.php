@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@section('content')
    <div style="padding: 16px;">
        <h1>Réservation n°{{ $rent->id }}</h1>

        <h4>Informations sur la réservation : </h4>

        <span style="display: block;">Nom du client : {{ $rent->userName }}</span>
        <span style="display: block;">Localité : {{ $rent->localization }}</span>
        <span style="display: block;">Date de début : {{ (new DateTime($rent->start))->format('d-m-Y') }}</span>
        <span style="display: block;">Date de fin : {{ (new DateTime($rent->end))->format('d-m-Y') }}</span>
        <span style="display: block;">Date de la réservation : {{ $rent->created_at }}</span>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- jQuery CDN - Minified version -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>
    <!-- jQueryUI CDN - Minified version -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
@endsection
