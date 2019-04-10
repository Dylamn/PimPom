@extends('layouts.master')

@section('navbar')
    @extends('layouts.navbar')
@endsection

@section('content')
    <div class="calendar__container">
        <div class="d-flex flex-row align-items-center justify-content-between m-4">
            <h1>{{ $calendar->toString() }}</h1>

            <div class="col-md-4 m-0 form-group">
                {{ Form::open(['url' => 'reserver']) }}
                {{ Form::label('date', 'Filtre : ', ['class' => 'col-md-1 form-label text-md-right', 'style' => 'display: inline']) }}
                {{ Form::text('Date', '', ['id' => 'datepicker', 'class' => 'col-md-3 form-control', 'style' => 'display: inline']) }}
            </div>

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
                        <?php
                        $date = (clone $start)->modify("+" . ($k + $i * 7) . " days");
                        $eventsForDay = $events[$date->format('Y-m-d')] ?? [];
                        ?>
                        <td class="{{ $calendar->withinMonth($date) ? '' : 'calendar__notCurrentMonth'}}">
                            @if($i === 0)
                                <div class="calendar__weekday">{{ $day }}</div>
                            @endif
                            <div class="calendar__day">
                                {{ $date->format('d')}}
                            </div>
                            @foreach($eventsForDay as $event)
                                <div class="calendar__event">
                                    <a href="{{ route('calendar.show.day.event', ['month' => $calendar->month, 'year' => $calendar->year, $event->id]) }}">
                                        {{ (new DateTime($event->created_at))->format('H:i') . ' - Réservation de ' . $event->userName . '.'}}
                                    </a>
                                </div>
                            @endforeach
                        </td>
                    @endforeach
                </tr>
            @endfor
        </table>
    </div>
@endsection

@section('script')
    <script src="{{ asset('hot/js/app.js') }}" defer></script>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
@endsection
