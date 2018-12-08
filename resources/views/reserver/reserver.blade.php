@extends('reserver.template')

@section('contenu')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Effectuer une réservation') }}</div>

                    <div class="card-body">
                        {{ Form::open(['url' => 'reserver']) }}
                        <div class="form-group row">
                            {{ Form::label('nbAdultes', 'Nombre d\'adultes :') }}
                            {{ Form::number('nbAdultes', 1, ['class' => 'col-lg-2 control-label']) }}
                        </div>

                        <div class="form-group row">
                            {{ Form::label('nbEnfants', 'Nombre d\'enfants :') }}
                            {{ Form::number('nbEnfants', 0) }}
                        </div>

                        <div class="form-group row">
                            {{ Form::label('selectEquip', 'Skis') }}
                            {{ Form::checkbox('selectEquip', 'Skis') }}
                        </div>

                        <div class="form-group row">
                            {{ Form::label('selectEquip', 'Weedze') }}
                            {{ Form::checkbox('selectEquip', 'Weedze') }}
                        </div>

                        <div class="form-group row">
                            {{ Form::label('selectEquip', 'Snow') }}
                            {{ Form::checkbox('selectEquip', 'Snow') }}
                        </div>

                        <div class="form-group row">
                            {{ Form::label('selectEquip', 'Luge') }}
                            {{ Form::checkbox('selectEquip', 'Luge') }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
