@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">{{ __('Effectuer une réservation') }}</div>
                    <div class="card-body">
                        {{ Form::open(['url' => 'reserver']) }}
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('nomClient', 'Nom du client :', ['class' => 'col-md-auto col-form-label text-md-right']) }}
                                {{ Form::text('nomClient', '',['class' => 'col-md-3 form-control', 'style' => 'display: inline', 'required']) }}
                            </div>
                            <div class="col-md form-group">
                                {{ Form::label('nbPersonnes', 'Nombre de personne(s) :', ['class' => 'col-md-auto col-form-label text-md-right']) }}
                                {{ Form::select('nbPersonnes', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10] , 0, ['class' => 'col-md-2 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                        </div>

                        <light-pick></light-pick> {{-- dateDebut & dateFin --}}
                        <div class="row">
                            <div class="col-md">
                                <div id="detailsReservation"></div>
                            </div>
                        </div>
                        <div class="row offset-md-10">
                            <button type="button" id="btn" class="btn btn-primary" data-toggle="modal"
                                    data-target="#confirmation">Suivant &gt;
                            </button>
                        </div>

                        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Récapitulatif</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    Nom du client : <span id="nomClientC"></span>
                                                </div>
                                            </div>
                                            {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                            {{--Nombre d'adulte(s) : <span id="nbrAdultesC"></span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                            {{--Nombre d'enfant(s) : <span id="nbrEnfantC"></span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Date de début : <span id="dateDebutC"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    Date de fin : <span id="dateFinC"></span>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered table-hover"
                                                   id="table_recap">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th class="text-center">Equipements</th>
                                                    <th class="text-center">Taille</th>
                                                    <th class="text-center">Enfant</th>
                                                    <th class="text-center">Quantité</th>
                                                    <th class="text-center">Prix TTC</th>
                                                </tr>
                                                </thead>
                                                <tr>
                                                    <td><span id="equipment"></span></td>
                                                    <td><span id="taille"></span></td>
                                                    <td><span id="enfant"></span></td>
                                                    <td><span id="quantite"></span></td>
                                                    <td><span id="prix"></span></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md text-right">
                                                {{ json_decode('array') }}
                                                <p style="padding-right: 15px"><b>Total TTC : <span
                                                            id="total">0.00</span> €</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                        </button>
                                        <button type="submit" class="btn btn-primary">Confirmer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Scripts -->
    <script src="{{ asset('js/get_nb_equipments.js') }}"></script>
    <script src="{{ asset('js/selectValues.js') }}"></script>
    <script src="{{ asset('js/cloneLine.js') }}"></script>
@endsection
