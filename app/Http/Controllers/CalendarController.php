<?php

namespace App\Http\Controllers;

use App\Services\CalendarService;
use App\Services\CalendarEventsService;
use Illuminate\Http\Request;
use Exception;

class CalendarController extends Controller
{
    /**
     * Send the days of a selected month-year.
     * Send the actual month if the parameter is not set.
     *
     * @param string|null $date
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function index($date = null)
    {
        if ($date === null) $date = date('m-Y');

        $date = explode('-', $date);

        $month = intval($date[0]);
        $year = intval($date[1]);

        $calendar = new CalendarService($month, $year);
        $rents = new CalendarEventsService();

        /*
         * $start represents the first day displayed on the calendar (may be a day of the previous month).
         * $end represents the last day displayed on the calendar (may be a day of the current month).
         */

        $start = $calendar->getStartingDay();
        $start = $start->format('N') === '1' ? $start : $calendar->getStartingDay()->modify('last monday');

        // Represent the number of weeks in a month (4, 5 or 6)
        $weeks = $calendar->getWeeks();

        $end = (clone $start)->modify('+' . (6 + 7 * ($weeks - 1)) . ' days');
        $rents = $rents->getEventsBetweenByDay($start, $end);

        return view('calendar.index', compact('calendar', 'start', 'weeks', 'end', 'rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource with a date (d-m-Y).
     *
     * @param string $date
     * @return \Illuminate\Http\Response
     */
    public function showRents($date)
    {
        try {
            $date = new \DateTime($date);
        } catch (Exception $ex) {
            return redirect(Route('calendar.index'));
        }

        $rents = new CalendarEventsService();

        $rents = $rents->getTheStartingEventsOnDay($date);


        return view('calendar.show', compact('rents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
