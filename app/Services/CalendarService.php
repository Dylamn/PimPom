<?php

namespace App\Services;

class CalendarService
{
    public $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
    private $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    public $month;
    public $year;

    /**
     * Calendar constructor.
     *
     * @param int|null $month The month between 1 and 12.
     * @param int|null $year The year.
     */
    public function __construct(?int $month = null, ?int $year = null)
    {
        if ($month === null || $month < 1 || $month > 12 || is_string($month)) {
            $month = intval(date('m'));
        }
        if ($year === null || is_string($year)) {
            $year = intval(date('Y'));
        }

        $this->month = $month;
        $this->year = $year;
    }

    /**
     * Return the month in full letter (ex : March 2018)
     *
     * @return string
     */
    public function toString(): string
    {
        return $this->months[$this->month - 1] . ' ' . $this->year;
    }

    /**
     * Return the first day of a month.
     *
     * @throws \Exception
     * @return \DateTime
     */
    public function getStartingDay(): \DateTime
    {
        return new \DateTime("{$this->year}-{$this->month}-01");
    }

    /**
     *  Return the number of weeks in a month
     *
     * @throws \Exception
     * @return int
     */
    public function getWeeks(): int
    {
        $start = $this->getStartingDay();
        $end = (clone $start)->modify("+1 month -1 day");
        $weeks = intval($end->format('W')) - intval($start->format('W')) + 1;

        if ($weeks < 0) {
            $weeks = 6;
        }
        return $weeks;
    }

    /**
     * Check if days are in the current month
     *
     * @param \DateTime $date
     * @throws \Exception
     * @return bool
     */
    public function withinMonth(\DateTime $date): bool {
        return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
    }

    /**
     * Return the next month.
     *
     * @return CalendarService
     */
    public function nextMonth(): CalendarService {
        $month = $this->month + 1;
        $year = $this->year;

        if ($month > 12) {
            $month = 1;
            $year += 1;
        }
        return new CalendarService($month, $year);
    }

    /**
     * Return the previous month.
     *
     * @return CalendarService
     */
    public function previousMonth(): CalendarService {
        $month = $this->month - 1;
        $year = $this->year;

        if ($month < 1) {
            $month = 12;
            $year -= 1;
        }
        return new CalendarService($month, $year);
    }
}
