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
                            <div class="col-md-6 form-group">
                                {{ Form::label('nbAdultes', 'Nombre d\'adultes :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::number('nbAdultes', 1, ['class' => 'col-md-2 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                            </div>
                            <div class="col-md-6 form-group">
                                {{ Form::label('nbEnfants', 'Nombre d\'enfants :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::number('nbEnfants', 0, ['class' => 'col-md-2 form-control', 'style' => 'margin-bottom: 5%; display: inline', 'min' => '0']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Sélectionner un ou plusieurs équipement(s) :</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('Skis', 'Skis', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                            {{ Form::checkbox('selectEquip[]', 'Skis', false, ['id' => 'Skis']) }}

                            {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                            {{ Form::number('nbSkis', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                        </div>
                        <div class="form-group row">
                            {{ Form::label('Weedze', 'Weedze', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                            {{ Form::checkbox('selectEquip[]', 'Weedze', false, ['id' => 'Weedze', 'min' => '0']) }}

                            {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                            {{ Form::number('nbWeedze', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                        </div>
                        <div class="form-group row">
                            {{ Form::label('Snow', 'Snow', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                            {{ Form::checkbox('selectEquip[]', 'Snow', false, ['id' => 'Snow']) }}

                            {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                            {{ Form::number('nbSnow', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                        </div>
                        <div class="form-group row">
                            {{ Form::label('Luge', 'Luge', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                            {{ Form::checkbox('selectEquip[]', 'Luge', false, ['id' => 'Luge']) }}

                            {{ Form::label('Skis', 'Si oui, combien ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                            {{ Form::number('nbLuge', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                        </div>
                        <div class="form-group row">
                            {{ Form::label('Chaussures', 'Chaussures', ['class' => 'col-md-3 col-form-label text-md-right']) }}
                            {{ Form::checkbox('selectEquip[]', 'Chaussures', false, ['id' => 'Chaussures']) }}

                            {{ Form::label('Chaussures', 'Votre pointure ?', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                            {{ Form::number('nbChaussures', 0, ['class' => 'col-md-1 form-control', 'style' => 'display: inline', 'min' => '0']) }}
                        </div>
                        <div class="form-group row  offset-md-10">
                            <button type="submit" class="btn btn-primary">Suivant ></button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
