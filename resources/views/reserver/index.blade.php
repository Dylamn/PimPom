@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

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
                                {{ Form::number('nbPersonnes', 1 , ['class' => 'col-md-2 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('dateDebut', 'Date de début de la réservation :', ['class' => 'col-form-label col-md-auto text-md-right']) }}
                                {{ Form::date('dateDebut', '', ['class' => 'col-md form-control col-md-5' , 'style' => 'display: inline', 'required']) }}
                            </div>
                            <div class="col-md form-group">
                                {{ Form::label('dateFin', 'Date de fin de la réservation :', ['class' => 'col-md-auto col-form-label text-md-right']) }}
                                {{ Form::date('dateFin', '', ['class' => 'col-md form-control col-md-5', 'style' => 'margin-bottom: 5%; display: inline', 'required']) }}
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div id="detailsReservation"></div>
                            </div>
                        </div>
                        <div class="row offset-md-10">
                            <button type="button" id="btn" class="btn btn-primary" data-toggle="modal"
                                    data-target="#confirmation">Suivant >
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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Nombre d'adulte(s) : <span id="nbrAdultesC"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    Nombre d'enfant(s) : <span id="nbrEnfantC"></span>
                                                </div>
                                            </div>
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
                                            <div class="col-md">
                                                {{ json_decode('array') }}
                                                <p><b>Total TTC : <span id="total">0.00</span> €</b></p>
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
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/submit_form.js') }}"></script>
    <script src="{{ asset('js/get_nb_equipments.js') }}"></script>
    <script src="{{ asset('js/selectValues.js') }}"></script>
    <script src="{{ asset('js/cloneLine.js') }}"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
@endsection
