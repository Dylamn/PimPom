@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div id="table" class="container justify-content-center" style="padding-top: 3%">
            @if(count($all) == 0)
                <div class="row">
                    <div class="col-md">
                        <h2 style="text-align: center">Il n'y a aucune ancienne réservation</h2>
                    </div>
                </div>
            @else
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center">Client</th>
                        <th class="text-center">Equipements</th>
                        <th class="text-center">Début</th>
                        <th class="text-center">Fin</th>
                    </tr>
                    </thead>

                    @foreach($all as $oneRent)
                        <tr>
                            <td class="text-center">{{ $oneRent->userName }}</td>
                            <td class="text-center">{{ $oneRent->label }}</td>
                            <td class="text-center">{{ (new DateTime($oneRent->start))->format('d-m-Y') }}</td>
                            <td class="text-center">{{ (new DateTime($oneRent->end))->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
@endsection
