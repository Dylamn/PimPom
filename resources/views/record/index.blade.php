@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
    <div class="container" id="side">
        <div id="table" class="container justify-content-center pt-5">
            @if(count($all) == 0)
                <div class="row">
                    <div class="col-md">
                        <h2 class="text-center">Il n'y a aucune réservation archivée pour le moment...</h2>
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

                    @foreach($all as $oneRecord)
                        <tr>
                            <td class="text-center">{{ $oneRecord->userName }}</td>
                            <td class="text-center">{{ $oneRecord->label }}</td>
                            <td class="text-center">{{ (new DateTime($oneRecord->start))->format('d-m-Y') }}</td>
                            <td class="text-center">{{ (new DateTime($oneRecord->end))->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@endsection
