@extends('layouts.master')
@extends('layouts.navbar')

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
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>
    <!-- jQueryUI CDN -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
@endsection
