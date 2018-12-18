@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" style="padding-top: 3%" id="side">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier un équipement</div>
                    <div class="card-body">
                        {{-- ToDo : Check les problèmes rules --}}
                        <form method="POST" action="/equipements/{{ $equipement->id }}" class="form-group">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="internalId">Référence</label>
                                    <input type="text" id="internalId" name="internalId"
                                           value="{{ $equipement->internalId }}"
                                           class="form-control rounded {{ $errors->has('internalId') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('internalId'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('internalId')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="size">taille de l'équipement (en cm)</label>
                                    <input type="number" min="0" max="999" step="0.01" id="size" name="size"
                                           value="{{ $equipement->size }}"
                                           class="form-control rounded {{ $errors->has('size') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('size'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('size')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="adultPrice">Prix adulte de l'équipement</label>
                                    <input type="number" min="0" step="0.01" id="adultPrice" name="adultPrice"
                                           value="{{ $equipement->adultPrice}}"
                                           class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('adultPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('adultPrice')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="childrenPrice">Prix enfant de l'équipement</label>
                                    <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"
                                           value="{{ $equipement->childrenPrice }}"
                                           class="form-control rounded {{ $errors->has('childrenPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('childrenPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('childrenPrice')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-md-5 col-md-2">
                                    <input type="submit" value="Modifier" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        {{--<div class="row" style="padding-top: 3%; padding-bottom: 15px">--}}
            {{--<h1>Modifier un équipement</h1>--}}
        {{--</div>--}}
        {{--<form method="POST" action="/equipements/{{ $equipement->id }}" class="form-group">--}}
            {{--@method('PATCH')--}}
            {{--@csrf--}}
            {{--<div class="row">--}}
                {{--<label for="internalId">Référence</label>--}}
                {{--<input type="text" id="internalId" name="internalId" value="{{ $equipement->internalId }}"--}}
                       {{--class="form-control rounded {{ $errors->has('internalId') ? 'is-invalid' : '' }}">--}}

                {{--@if ($errors->has('internalId'))--}}
                    {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ __($errors->first('internalId')) }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}

                {{--<label for="size">taille de l'équipement (en cm)</label>--}}
                {{--<input type="number" min="0" max="999" step="0.01" id="size" name="size" value="{{ $equipement->size }}"--}}
                       {{--class="form-control rounded {{ $errors->has('size') ? 'is-invalid' : '' }}">--}}

                {{--@if ($errors->has('size'))--}}
                    {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ __($errors->first('size')) }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
            {{--<div class="row" style="margin-bottom: 1.2em">--}}
                {{--<label for="adultPrice">Prix adulte de l'équipement</label>--}}
                {{--<input type="number" min="0" step="0.01" id="adultPrice" name="adultPrice"--}}
                       {{--value="{{ $equipement->adultPrice}}"--}}
                       {{--class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">--}}

                {{--@if ($errors->has('adultPrice'))--}}
                    {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ __($errors->first('adultPrice')) }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}

                {{--<label for="childrenPrice">Prix enfant de l'équipement</label>--}}
                {{--<input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"--}}
                       {{--value="{{ $equipement->childrenPrice }}"--}}
                       {{--class="form-control rounded {{ $errors->has('childrenPrice') ? 'is-invalid' : '' }}">--}}

                {{--@if ($errors->has('childrenPrice'))--}}
                    {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ __($errors->first('childrenPrice')) }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
            {{----}}
            {{--<div class="row">--}}
                {{--<div class="offset-md-5">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<input type="submit" value="Modifier" class="btn btn-primary">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}

@endsection
