@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@section('content')

    <div class="calendar__container">
        <h1>{{ $calendar->toString() }}</h1>
        <table class="calendar__table">
            <tr>
                <td>Lundi</td>
                <td>Mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
                <td>Dimanche</td>
            </tr>
        </table>

        @foreach($calendar as $date)
            {{ 'm' . $date->format('m') }}
            <br>
            {{ 'j' . $date->format('j') }}
        @endforeach
        <pre>
            {{--{{ var_dump($calendar) }}--}}
        </pre>
    </div>
@endsection