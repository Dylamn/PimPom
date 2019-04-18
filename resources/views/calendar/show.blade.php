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
