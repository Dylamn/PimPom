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
                    <div class="card-header">Modifier une catégorie</div>
                    <div class="card-body">

                        {{-- ToDo : Check les problèmes rules --}}
                        <form method="POST" action="/categories/{{ $categorie->id }}" class="form-group">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="label">Categorie</label>
                                    <input type="text" id="label" name="label" value="{{ $categorie->label }}"
                                           class="form-control rounded {{ $errors->has('label') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('label'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('label')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md form-group">
                                    <label for="adultPrice">Prix adulte (en €)</label>
                                    <input type="number" min="0" max="999" step="0.01" id="adultPrice" name="adultPrice"
                                           value="{{ $categorie->adultPrice }}"
                                           class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">

                                    @if ($errors->has('adultPrice'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ __($errors->first('adultPrice')) }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md form-group">
                                    <label for="childrenPrice">Prix enfant (en €)</label>
                                    <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice"
                                           value="{{ $categorie->childrenPrice}}"
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

    {{--<form method="POST" action="/categories/{{ $categorie->id }}" class="form-group">--}}
    {{--@method('PATCH')--}}
    {{--@csrf--}}

    {{--<div class="row">--}}
    {{--<label for="label">Categorie</label>--}}
    {{--<input type="text" id="label" name="label" value="{{ $categorie->label }}"--}}
    {{--class="form-control rounded {{ $errors->has('label') ? 'is-invalid' : '' }}">--}}

    {{--@if ($errors->has('label'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ __($errors->first('label')) }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="adultPrice">Prix adulte (en €)</label>--}}
    {{--<input type="number" min="0" max="999" step="0.01" id="adultPrice" name="adultPrice" value="{{ $categorie->adultPrice }}"--}}
    {{--class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">--}}

    {{--@if ($errors->has('adultPrice'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ __($errors->first('adultPrice')) }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="childrenPrice">Prix enfant (en €)</label>--}}
    {{--<input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice" value="{{ $categorie->childrenPrice}}"--}}
    {{--class="form-control rounded {{ $errors->has('childrenPrice') ? 'is-invalid' : '' }}">--}}

    {{--@if ($errors->has('childrenPrice'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ __($errors->first('childrenPrice')) }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<div class="offset-md-5">--}}
    {{--<div class="col-md-2">--}}
    {{--<input type="submit" value="Modifier" class="btn btn-primary">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
@endsection
