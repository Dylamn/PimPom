@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="calendar__container">
        <div class="d-flex flex-row align-items-center justify-content-between m-4">
            <h1>{{ $calendar->toString() }}</h1>

{{--            <div class="col-md-4 m-0 form-group">--}}
{{--                {{ Form::open(['url' => 'reserver']) }}--}}
{{--                {{ Form::label('date', 'Filtre : ', ['class' => 'col-md-1 form-label text-md-right', 'style' => 'display: inline']) }}--}}
{{--                {{ Form::text('Date', '', ['id' => 'datepicker', 'class' => 'col-md-3 form-control', 'style' => 'display: inline']) }}--}}
{{--            </div>--}}

            <div>
                <a href="{{ route('calendar.show.month', ['month' => $calendar->previousMonth()->month, 'year' => $calendar->previousMonth()->year])}}"
                   class="btn btn-primary">
                    &lt;
                </a>
                <a href="{{ route('calendar.show.month', ['month' => $calendar->nextMonth()->month, 'year' => $calendar->nextMonth()->year])}}"
                   class="btn btn-primary">
                    &gt;
                </a>
            </div>
        </div>

        <table class="calendar__table table-responsive-md">
            @for($i = 0; $i < $calendar->getWeeks(); $i++)
                <tr>
                    @foreach($calendar->days as $k => $day)
                        @php
                            $date = (clone $start)->modify("+" . ($k + $i * 7) . " days");
                            $eventsForDay = $events[$date->format('Y-m-d')] ?? [];
                            echo '<pre>';
                            print_r($eventsForDay);
                            echo '</pre>';
                        @endphp
                        <td class="{{ $calendar->withinMonth($date) ? '' : 'calendar__notCurrentMonth'}}">
                            @if($i === 0)
                                <div class="calendar__weekday">{{ $day }}</div>
                            @endif
                            <div class="calendar__day">
                                {{ $date->format('d')}}
                            </div>
                            @if(sizeof($eventsForDay) > 0)
                                <div class="calendar__event">
                                    <a href="{{ route('calendar.show.day.event', ['day' => $date->format('d'), 'month' => $calendar->month, 'year' => $calendar->year]) }}">
                                        {{ sizeof($eventsForDay) . ' réservation' . (sizeof($eventsForDay) > 1 ? 's' : '') }}
                                    </a>
                                </div>
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endfor
        </table>
    </div>
@endsection
