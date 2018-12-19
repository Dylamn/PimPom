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
                                {{ Form::label('Skis', 'Skis', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Skis', false, ['id' => 'Skis']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::number('nbSkis', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <p>Ski(s) disponible(s) : {{ Count($ski) }}</p>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Weedze', 'Weedze', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Weedze', false, ['id' => 'Weedze', 'min' => '0']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::number('nbWeedze', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <p>Weedze disponible(s) : {{ Count($weedze) }}</p>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Snow', 'Snow', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Snow', false, ['id' => 'Snow']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::number('nbSnow', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <p>Snow disponible(s) : {{ Count($snow) }}</p>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Luge', 'Luge', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Luge', false, ['id' => 'Luge']) }}

                                {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::number('nbLuge', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <p>Luge(s) disponible(s) : {{ Count($luge) }}</p>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('Chaussures', 'Chaussures', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Chaussures', false, ['id' => 'Chaussures']) }}

                                {{ Form::label('Chaussures', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::number('nbChaussures', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <p>Chaussures disponible(s) : {{ Count($shoes) }}</p>
                        </div>
                        <div class="row">
                            <div class="col-md form-group">
                                {{ Form::label('dateDebut', 'Date début réservation :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::date('dateDebut', 1, ['class' => 'col-md form-control', 'style' => 'display: inline']) }}
                            </div>
                            <div class="col-md form-group">
                                {{ Form::label('dateFin', 'Date fin réservation :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::date('dateFin', 0, ['class' => 'col-md form-control', 'style' => 'margin-bottom: 5%; display: inline']) }}
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
            <script src="">
                siOui = $(function(){
                    $('div.CheckBoxes input[type=checkbox]').click(function(){
                        cochee = $(this).is(':checked'); // je regarde si la case est cochée ou non
                        page=$(this).attr("name"); // je capture l'attibut name
                        cible=page+".php"; // je créer une variable lien pour ma requete ajax

                        if (cochee == true) {
                            $(function(){
                                $.ajax({
                                    url: "contenu/"+cible, // j'utilise le lien pour aller cherche les contenus à rajouter
                                    cache: false,
                                    success: function(html) {
                                        $("#Form"+page).append(html); // j'ajoute le contenu dans ma div
                                    },
                                    error: function(XMLHttpRequest,textStatus, errorThrown){
                                        alert(textStatus);
                                    },
                                });
                                return false;
                            });
                        }

                        else {
                            $(function(){
                                $("#Form"+page).empty(); // je supprime le contenu dans ma div
                                return false;
                            });
                        }

                    });
                });
            </script>
@endsection
