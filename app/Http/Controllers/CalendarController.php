<?php

namespace App\Http\Controllers;

use App\Services\CalendarService;
use App\Services\CalendarEventsService;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;

class CalendarController extends Controller
{
    /**
     * Display the actual month if no parameters are sets.
     *
     * @param int|null $month
     * @param int|null $year
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function index(?int $month = null, ?int $year = null)
    {
        if ($month === null) $month = intval(date('m'));
        if ($year === null) $year = intval(date('Y'));

        $calendar = new CalendarService($month, $year);
        $events = new CalendarEventsService();

        $start = $calendar->getStartingDay();
        $start = $start->format('N') === '1' ? $start : $calendar->getStartingDay()->modify('last monday');
        $weeks = $calendar->getWeeks();
        $end = (clone $start)->modify('+' . (6 + 7 * ($weeks - 1)) . ' days');
        $events = $events->getEventsBetweenByDay($start, $end);

        return view('calendar.index', compact('calendar', 'start', 'weeks', 'end', 'events'));
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
     * Display the specified resource with a date (m-Y).
     *
     * @param  int $month
     * @param int $year
     * @param int $idEvent
     * @return \Illuminate\Http\Response
     */
    public function showEvents($month, $year, $idEvent)
    {
        $rent = CalendarEventsService::findById($idEvent);

        return view('calendar.show', compact('rent'));
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
