@extends('layouts.master')
@extends('layouts.navbar')

@section('content')
    <div class="calendar__container">
        <div class="d-flex flex-row align-items-center justify-content-between m-4">
            <h1>{{ $calendar->toString() }}</h1>

            <div>
                <a href="{{
                route('calendar.show.month', ['date' => $calendar->previousMonth()->monthToStringNumber() . '-' . $calendar->previousMonth()->year])
                }}"
                   class="btn btn-primary">
                    &lt;
                </a>
                <a href="{{
                    route('calendar.show.month', ['date' => $calendar->nextMonth()->monthToStringNumber() . '-' . $calendar->nextMonth()->year])
                }}"
                   class="btn btn-primary">
                    &gt;
                </a>
            </div>
        </div>

        <table class="calendar__table table-responsive-md">
            @for($i = 0; $i < $calendar->getWeeks(); $i++)
                <tr>
                    {{--
                        $k represents a day of the week by a number. (Monday = 0 ; Sunday = 6)
                        $day represents a day of the week by a string (Monday, Tuesday...)
                    --}}
                    @foreach($calendar->days as $k => $day)
                        @php
                            /*
                                $date increments at each iteration
                                1. 01-XX-XXXX
                                2. ++01-XX-XXXX => 02-XX-XXXX
                            */
                            $date = (clone $start)->modify("+" . ($k + $i * 7) . " days");
                            /*
                                $rents
                            */
                            $rentsForDay = $rents[$date->format('Y-m-d')] ?? [];
                        @endphp
                        <td class="{{ $calendar->withinMonth($date) ? '' : 'calendar__notCurrentMonth'}}">
                            @if($i === 0)
                                <div class="calendar__weekday">{{ $day }}</div>
                            @endif
                            <div class="calendar__day">
                                {{ $date->format('d')}}
                            </div>
                            @if(sizeof($rentsForDay) > 0)
                                <div class="calendar__event">
                                    <a href="{{ route('calendar.show.day', ['date' => $date->format('d') . '-' . $date->format('m') . '-' . $calendar->year]) }}"
                                       class="font-weight-bold">
                                        {{ sizeof($rentsForDay) . ' réservation' . (sizeof($rentsForDay) > 1 ? 's' : '') }}
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
