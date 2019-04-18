@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 3%">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Mes réservations</div>

                    <div class="card-body container table-responsive">
                        @if(empty($rents))
                            <div class="row">
                                <div class="col-md">
                                    Vous n'avez aucune réservation.
                                </div>
                            </div>
                        @else
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-center">Client</th>
                                    <th class="text-center">Equipements</th>
                                    <th class="text-center">Début</th>
                                    <th class="text-center">Fin</th>
                                </tr>
                                </thead>

                                @foreach($rents as $oneRent)
                                    <tr>
                                        <td class="text-center">{{ $oneRent->userName }}</td>
                                        <td class="text-center">{{ $oneRent->label }}</td>
                                        <td class="text-center">{{ (new DateTime($oneRent->start))->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ (new DateTime($oneRent->end))->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
