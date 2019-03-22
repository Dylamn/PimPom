<?php

namespace App\Services;

use \Carbon\CarbonPeriod;

class CalendarService
{
    private $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    private $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

    private $month;
    private $year;

    /**
     * Calendar constructor.
     *
     * @param int $month The month between 1 and 12.
     * @param int $year The year.
     */
    public function __construct(?int $month = null, ?int $year = null)
    {
        if ($month === null || is_string($month)) {
            $month = intval(date('m'));
        }
        if ($year === null || is_string($year)) {
            $year = intval(date('Y'));
        }

        $month = $month % 12;

        $this->month = $month;
        $this->year = $year;
    }

    /**
     * Return the month in full letter (ex : March 2018)
     *
     * @return string
     */
    public function toString(): string {
        return $this->months[$this->month - 1] . ' ' . $this->year;
    }
}