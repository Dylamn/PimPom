@extends('layouts.master')

@extends('layouts.navbar')

@section('content')
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tableau de bord</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-3">
                                    Vous êtes connecté.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <light-pick></light-pick>
    </div>
@endsection

@section('script')
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
@endsection
