@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Modifier une catégorie</h1>
        {{ var_dump($errors) }}
        {{-- ToDo : Check les problèmes rules --}}
        <form method="POST" action="/categories/{{ $categorie->id }}" class="form-group">
            @method('PATCH')
            @csrf

            <div class="row">
                <label for="label">Categorie</label>
                <input type="text" id="label" name="label" value="{{ $categorie->label }}"
                       class="form-control rounded {{ $errors->has('label') ? 'is-invalid' : '' }}">

                @if ($errors->has('label'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('label')) }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <label for="adultPrice">Prix adulte (en €)</label>
                <input type="number" min="0" max="999" step="0.01" id="adultPrice" name="adultPrice" value="{{ $categorie->adultPrice }}"
                       class="form-control rounded {{ $errors->has('adultPrice') ? 'is-invalid' : '' }}">

                @if ($errors->has('adultPrice'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('adultPrice')) }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <label for="childrenPrice">Prix enfant (en €)</label>
                <input type="number" min="0" step="0.01" id="childrenPrice" name="childrenPrice" value="{{ $categorie->childrenPrice}}"
                       class="form-control rounded {{ $errors->has('childrenPrice') ? 'is-invalid' : '' }}">

                @if ($errors->has('childrenPrice'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __($errors->first('childrenPrice')) }}</strong>
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
