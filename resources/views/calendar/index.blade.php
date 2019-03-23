@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection
<?php
    $start = $calendar->getStartingDay();
    $start = $start->format('N') === '1' ? $start : $calendar->getStartingDay()->modify('last monday');
?>
@section('content')
    <div class="calendar__container">
        <div class="d-flex flex-row align-items-center justify-content-between m-4">
            <h1>{{ $calendar->toString() }}</h1>
            <div>
                <a href="{{ route('calendar.show', ['month' => $calendar->previousMonth()->month, 'year' => $calendar->previousMonth()->year])}}"
                   class="btn btn-primary">
                    &lt
                </a>
                <a href="{{ route('calendar.show', ['month' => $calendar->nextMonth()->month, 'year' => $calendar->nextMonth()->year])}}"
                   class="btn btn-primary">
                    &gt
                </a>
            </div>
        </div>

        <table class="calendar__table">
            @for($i = 0; $i < $calendar->getWeeks(); $i++)
                <tr>
                    @foreach($calendar->days as $k => $day)
                        <?php $date = (clone $start)->modify("+" . ($k + $i * 7) . " days") ?>
                        <td class="{{ $calendar->withinMonth($date) ? '' : 'calendar__notCurrentMonth'}}">
                            @if($i === 0)
                                <div class="calendar__weekday">{{ $day }}</div>
                            @endif
                            <div class="calendar__day">
                                {{ $date->format('d')}}
                            </div>
                        </td>
                    @endforeach
                </tr>
            @endfor
        </table>
    </div>
@endsection
