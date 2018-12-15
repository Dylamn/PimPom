@extends('reserver.template')

@section('content')
    <div class="container">
        <h1>Modifier un équipement</h1>

        <form method="POST" action="/equipements" class="form-group">
            @csrf
            {{ var_dump($equipment) }}
            {{--<div class="row">--}}
                {{--<label for="libelle">Référence</label>--}}
                {{--<input type="text" id="libelle" name="libelle" class="form-control rounded" value="{{ $equipment->idInterne }}">--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<label for="taille">Taille de l'équipement (en cm)</label>--}}
                {{--<input type="number" min="0" max="999" step="0.01" id="taille" name="taille"--}}
                       {{--class="form-control rounded" value="{{ $equipment->taille }}">--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<label for="prixAdulte">Prix adulte de l'équipement</label>--}}
                {{--<input type="number" min="0" step="0.01" id="prixAdulte" name="prixAdulte" class="form-control rounded" value="{{ $equipment->prixAdulte}}">--}}
            {{--</div>--}}
            {{--<div class="row" style="margin-bottom: 1.2em">--}}
                {{--<label for="prixEnfant">Prix enfant de l'équipement</label>--}}
                {{--<input type="number" min="0" step="0.01" id="prixEnfant" name="prixEnfant" class="form-control rounded" value="{{ $equipment->prixEnfant }}">--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="offset-md-5">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<input type="submit" value="Modifier" class="btn btn-primary">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </form>
    </div>
@endsection
