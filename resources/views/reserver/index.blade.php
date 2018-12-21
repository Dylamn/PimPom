@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Effectuer une réservation') }}</div>
                    <div class="card-body">
                        {{ Form::open(['url' => 'reserver']) }}
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('nbAdultes', 'Nombre d\'adultes :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::number('nbAdultes', 1, ['class' => 'col-md-2 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <div class="col-md form-group">
                                {{ Form::label('nbEnfants', 'Nombre d\'enfants :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::number('nbEnfants', 0, ['class' => 'col-md-2 form-control', 'style' => 'margin-bottom: 5%; display: inline', 'min' => '0']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                <p>Sélectionner un ou plusieurs équipement(s) :</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Skis', 'Skis', ['class' => 'col-md-2 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Skis', false, ['id' => 'Skis']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                {{ Form::number('nbSkis', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}

                                <p class="col-md-3 pull-right" style="display: inline">Ski(s) disponible(s) : {{ Count($ski) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Weedze', 'Weedze', ['class' => 'col-md-2 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Weedze', false, ['id' => 'Weedze', 'min' => '0']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                {{ Form::number('nbWeedze', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}

                                <p class="col-md-3 pull-right" style="display: inline">Weedze disponible(s)
                                    : {{ Count($weedze) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Snow', 'Snow', ['class' => 'col-md-2 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Snow', false, ['id' => 'Snow']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                {{ Form::number('nbSnow', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}

                                <p class="col-md-3 pull-right" style="display: inline">Snow disponible(s)
                                    : {{ Count($snow) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Luge', 'Luge', ['class' => 'col-md-2 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Luge', false, ['id' => 'Luge']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                {{ Form::number('nbLuge', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                                <p class="col-md-3 pull-right" style="display: inline">Luge(s) disponible(s)
                                    : {{ Count($luge) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Chaussures', 'Chaussures', ['class' => 'col-md-2 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Chaussures', false, ['id' => 'Chaussures']) }}

                                {{ Form::label('Chaussures', 'Si oui, combien ?', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                {{ Form::number('nbChaussures', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}

                                <p class="col-md-3 pull-right" style="display: inline">Chaussures disponible(s)
                                    : {{ Count($shoes) }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('dateDebut', 'Date de début de la réservation :', ['class' => 'col-md-7 col-form-label text-md-right']) }}
                                {{ Form::date('dateDebut', 1, ['class' => 'col-md form-control col-md-4', 'style' => 'display: inline']) }}
                            </div>
                            <div class="col-md form-group">
                                {{ Form::label('dateFin', 'Date de fin de la réservation :', ['class' => 'col-md-7 col-form-label text-md-right']) }}
                                {{ Form::date('dateFin', 0, ['class' => 'col-md form-control col-md-4', 'style' => 'margin-bottom: 5%; display: inline']) }}
                            </div>
                        </div>

                        <div class="row offset-md-10">
                            <button type="submit" class="btn btn-primary">Suivant ></button>
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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/submit_form.js') }}"></script>
    <script src="{{ asset('js/get_nb_equipments.js') }}"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
@endsection
