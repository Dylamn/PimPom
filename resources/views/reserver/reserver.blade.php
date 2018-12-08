@extends('reserver.template')

@section('contenu')
    <div class="container">
        <div class="row justify-content-center">
            <!--<div class="col-md-8">-->
                <div class="card" style="width: 100%">
                    <div class="card-header">{{ __('Effectuer une réservation') }}</div>

                    <div class="card-body">

                        {{ Form::open(['url' => 'reserver']) }}
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {{ Form::label('nbAdultes', 'Nombre d\'adultes :', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::number('nbAdultes', 1, ['class' => 'col-md-2 form-control']) }}
                            </div>
                            <div class="col-md-6 form-group">

                                {{ Form::label('nbEnfants', 'Nombre d\'enfants :', ['class' => 'col-md-5 col-form-label text-md-left']) }}
                                {{ Form::number('nbEnfants', 0, ['class' => 'col-md-2 form-control', 'style' => 'margin-bottom: 5%']) }}
                            </div>
                            <p style="margin-bottom: 5%">Sélectionner un ou plusieurs équipement(s) :</p>

                            <div class="form-group row">
                                {{ Form::label('selectEquip', 'Skis', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Skis') }}
                            </div>

                            <div class="form-group row">
                                {{ Form::label('selectEquip', 'Weedze', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Weedze') }}
                            </div>

                            <div class="form-group row">
                                {{ Form::label('selectEquip', 'Snow', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Snow') }}
                            </div>

                            <div class="form-group row">
                                {{ Form::label('selectEquip', 'Luge', ['class' => 'col-md-5 col-form-label text-md-right']) }}
                                {{ Form::checkbox('selectEquip[]', 'Luge') }}
                            </div>
                        </div>
                            {{ Form::close() }}

                    </div>
                </div>
            <!--</div>-->
        </div>
    </div>
@endsection
