@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Effectuer une réservation') }}</div>

                    <div class="card-body">

                        {{ Form::open(['url' => 'reserver']) }}
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {{ Form::label('nbAdultes', 'Nombre d\'adultes :', ['class' => 'col-md-6 col-form-label text-md-right']) }}
                                {{ Form::number('nbAdultes', 1, ['class' => 'col-md-2 form-control', 'style' => 'display: inline']) }}
                            </div>
                            <div class="col-md-6 form-group">

                                {{ Form::label('nbEnfants', 'Nombre d\'enfants :', ['class' => 'col-md-6 col-form-label text-md-left']) }}
                                {{ Form::number('nbEnfants', 0, ['class' => 'col-md-2 form-control', 'style' => 'margin-bottom: 5%; display: inline']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Sélectionner un ou plusieurs équipement(s) :</p>
                            </div>
                        </div>

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

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
