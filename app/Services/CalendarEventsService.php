<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Model\Rents;
use DateTime, Exception;

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
//        INSERT INTO `rents` (`id`, `userId`, `settled`, `localization`, `start`, `end`) VALUES (NULL, '1', '0', 'France', '2019-03-27 00:00:00', '2019-03-29 23:59:59');
        // TODO : Check Eloquent for different SELECT method.
        $records = DB::select("SELECT * FROM rents WHERE start BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'");
//        $records = Rents::where('start')->between('Y-m-d 00:00:00', 'Y-m-d 23:59:59');

        return $records;
    }

    /**
     * Récupère les évènement entre deux dates indexées par jour.
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return array
     */
    function getEventsBetweenByDay(DateTime $start, DateTime $end): array
    {
        $events = $this->getEventsBetween($start, $end);
        $days = [];

        foreach ($events as $event) {
            try {
                $date = new DateTime($event->start);
                $date = $date->format('Y-m-d');
            } catch (Exception $ex) {
                // TODO : Manage Exception
            }
            if (!isset($days[$date])) {
                $days[$date] = [$event];
            } else {
                $days[$date][] = $events;
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
    static public function findById(int $id) {

        return Rents::findOrFail($id);
    }
}
