@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="p-3">
        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{ str_contains(url()->previous(), 'calendrier') ? url()->previous() : route('calendar.index') }}">
                    <button type="button" class="btn btn-primary">
                        Retourner au calendrier
                    </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionRents">
                    <div class="card">
                        <div class="card-header" id="h-one">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link font-weight-bold" data-toggle="collapse"
                                        data-target="#collapseStartingRents" aria-expanded="true"
                                        aria-controls="collapseStartingRents">
                                    Réservation{{ sizeof($startingRents) > 1 ? 's' : '' }} commencant ce jour-ci
                                    ({{ sizeof($startingRents) }})
                                </button>
                            </h2>
                        </div> <!-- End of first card-header -->

                        <div id="collapseStartingRents" class="collapse show" aria-labelledby="h-one"
                             data-parent="#accordionRents">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">N°</th>
                                        <th class="text-center">Locataire</th>
                                        <th class="text-center">Localité</th>
                                        <th class="text-center">Début de la réservation</th>
                                        <th class="text-center">Fin de la réservation</th>
                                        <th class="text-center">Paiement</th>
                                        <th class="text-center">Consulter</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($startingRents as $rent)
                                        <tr>
                                            <td class="text-center">{{ $rent->id }}</td>
                                            <td class="text-center">{{ $rent->userName }}</td>
                                            <td class="text-center">{{ $rent->localization }}</td>
                                            <td class="text-center">{{ $rent->start }}</td>
                                            <td class="text-center">{{ $rent->end }}</td>
                                            <td class="text-center">{{ $rent->settled }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('calendar.show.rent', ['date' => $date->format('d-m-Y'), 'rentalId' => $rent->id]) }}">
                                                    <i class="fa fa-eye" style="font-size: 1.4em;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- End of collapseStartingRents -->
                    </div> <!-- End of first card -->

                    <div class="card">
                        <div class="card-header" id="h-two">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link font-weight-bold" data-toggle="collapse"
                                        data-target="#collapseCurrentRents" aria-expanded="true"
                                        aria-controls="collapseCurrentRents">
                                    Réservation en cours ({{ sizeof($currentRents) }})
                                </button>
                            </h2>
                        </div> <!-- End of second card-header -->

                        <div id="collapseCurrentRents" class="collapse hide" aria-labelledby="h-two"
                             data-parent="#accordionRents">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">N°</th>
                                        <th class="text-center">Locataire</th>
                                        <th class="text-center">Localité</th>
                                        <th class="text-center">Début de la réservation</th>
                                        <th class="text-center">Fin de la réservation</th>
                                        <th class="text-center">Paiement</th>
                                        <th class="text-center">Consulter</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($currentRents as $rent)
                                        <tr>
                                            <td class="text-center">{{ $rent->id }}</td>
                                            <td class="text-center">{{ $rent->userName }}</td>
                                            <td class="text-center">{{ $rent->localization }}</td>
                                            <td class="text-center">{{ $rent->start }}</td>
                                            <td class="text-center">{{ $rent->end }}</td>
                                            <td class="text-center">{{ $rent->settled }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('calendar.show.rent', ['date' => $date->format('d-m-Y'), 'rentalId' => $rent->id]) }}">
                                                    <i class="fa fa-eye" style="font-size: 1.4em;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- End of collapseCurrentRents -->
                    </div> <!-- End of second card -->

                    <div class="card">
                        <div class="card-header" id="h-three">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link font-weight-bold" data-toggle="collapse"
                                        data-target="#collapseEndRents" aria-expanded="true"
                                        aria-controls="collapseEndRents">
                                    Réservation se terminant ce jour-ci ({{ sizeof($currentRents) }})
                                </button>
                            </h2>
                        </div> <!-- End of third card-header -->

                        <div id="collapseEndRents" class="collapse hide" aria-labelledby="h-three"
                             data-parent="#accordionRents">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">N°</th>
                                        <th class="text-center">Locataire</th>
                                        <th class="text-center">Localité</th>
                                        <th class="text-center">Début de la réservation</th>
                                        <th class="text-center">Fin de la réservation</th>
                                        <th class="text-center">Paiement</th>
                                        <th class="text-center">Consulter</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($currentRents as $rent)
                                        <tr>
                                            <td class="text-center">{{ $rent->id }}</td>
                                            <td class="text-center">{{ $rent->userName }}</td>
                                            <td class="text-center">{{ $rent->localization }}</td>
                                            <td class="text-center">{{ $rent->start }}</td>
                                            <td class="text-center">{{ $rent->end }}</td>
                                            <td class="text-center">{{ $rent->settled }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('calendar.show.rent', ['date' => $date->format('d-m-Y'), 'rentalId' => $rent->id]) }}">
                                                    <i class="fa fa-eye" style="font-size: 1.4em;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- End of collapseEndRents -->
                    </div> <!-- End of third card -->
                </div> <!-- End of accordion -->
            </div>
        </div>
    </div>
@endsection
