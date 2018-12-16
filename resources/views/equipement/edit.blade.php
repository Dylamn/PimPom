@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Modifier un équipement</h1>

        <form method="POST" action="/equipements/{{ $equipment->id }}" class="form-group">
            @method('PATCH')
            @csrf

            <div class="row">
                <label for="idInterne">Référence</label>
                <input type="text" id="idInterne" name="idInterne" value="{{ $equipment->idInterne }}"
                       class="form-control rounded {{ $errors->has('idInterne') ? 'is-invalid' : '' }}">

                @if ($errors->has('idInterne'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('idInterne')) }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <label for="taille">Taille de l'équipement (en cm)</label>
                <input type="number" min="0" max="999" step="0.01" id="taille" name="taille" value="{{ $equipment->taille }}"
                       class="form-control rounded {{ $errors->has('taille') ? 'is-invalid' : '' }}">

                @if ($errors->has('taille'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('taille')) }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <label for="prixAdulte">Prix adulte de l'équipement</label>
                <input type="number" min="0" step="0.01" id="prixAdulte" name="prixAdulte" value="{{ $equipment->prixAdulte}}"
                       class="form-control rounded {{ $errors->has('prixAdulte') ? 'is-invalid' : '' }}">

                @if ($errors->has('prixAdulte'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('prixAdulte')) }}</strong>
                    </span>
                @endif
            </div>

            <div class="row" style="margin-bottom: 1.2em">
                <label for="prixEnfant">Prix enfant de l'équipement</label>
                <input type="number" min="0" step="0.01" id="prixEnfant" name="prixEnfant" value="{{ $equipment->prixEnfant }}"
                       class="form-control rounded {{ $errors->has('prixEnfant') ? 'is-invalid' : '' }}">

                @if ($errors->has('prixEnfant'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('prixEnfant')) }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="offset-md-5">
                    <div class="col-md-2">
                        <input type="submit" value="Modifier" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
