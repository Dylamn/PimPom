@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="d-flex flex-row align-items-center justify-content-between p-4">
            <h1>{{ $date . ' - ' . 'Réservation de ' . $rent->userName }}</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <span class="font-large d-block">Nom du locataire :</span>
                        <span class="d-block mt-1 font-large">{{ $rent->userName }}</span>
                    </div>

                    <div class="col-md-12 mb-4">
                        <span class="font-large d-block">Localité :</span>
                        <span class="d-block mt-1 font-large">{{ $rent->localization }}</span>
                    </div>

                    <div class="col-md-12 mb-4">
                        <span class="font-large">Date du début de la réservation :</span>
                        <span class="d-block mt-1 font-large">{{ $rent->start }}</span>
                    </div>

                    <div class="col-md-12 mb-4">
                        <span class="font-large"> Date de fin de la réservation :</span>
                        <span class="d-block mt-1 font-large">{{ $rent->start }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                 <pre>
                    {{ print_r($rent) }}
                 </pre>
            </div>
        </div>
    </div>
@endsection
