@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>{{ __($equipement->label) }}</h1>
        <span> {{ __('Référence : ' . $equipement->internalId) }}</span>
    </div>
@endsection