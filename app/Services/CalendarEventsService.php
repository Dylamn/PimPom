<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Rent;
use DateTime;

class CalendarEventsService
{
    /**
     * Récupère les évènement commencant entre deux dates.
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return array
     */
    function getEventsBetween(DateTime $start, DateTime $end): array
    {
        // TODO : Check Eloquent for different SELECT method.
        $records = DB::select("SELECT * FROM rents WHERE start BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'");
//        $records = Rents::where('start')->between('Y-m-d 00:00:00', 'Y-m-d 23:59:59');

        return $records;
    }

    /**
     * Récupère les évènement commencant lors du jour spécifié
     *
     * @param DateTime $date
     * @return array
     */
    function getTheStartingEventsOnDay($date): array
    {
        $records = DB::select("
            SELECT * FROM rents 
            WHERE '{$date->format('Y-m-d 00:00:00')}' BETWEEN start AND ADDDATE(start, 1)"
        );


        return $records;
    }

    /**
     * Récupère les évènement entre deux dates indexées par jour.
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return array
     * @throws \Exception
     */
    function getEventsBetweenByDay(DateTime $start, DateTime $end): array
    {
        $events = $this->getEventsBetween($start, $end);
        $days = [];

        foreach ($events as $event) {
            $date = new DateTime($event->start);
            $date = $date->format('Y-m-d');

            if (!isset($days[$date])) {
                $days[$date] = [$event];

            } else {
                array_push($days[$date], $event);
            }
        }

        return $days;
    }


    /**
     * Récupère un évènement.
     *
     * @param int $id
     * @return array
     */
    static public function findById(int $id)
    {

        return Rent::findOrFail($id);
    }
}
