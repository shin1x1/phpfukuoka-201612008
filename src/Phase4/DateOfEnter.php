<?php
namespace Acme\Phase4;

use Cake\Chronos\Date;

class DateOfEnter
{
    /**
     * @var Date
     */
    private $date;

    /**
     * @param Date $date
     */
    public function __construct(Date $date)
    {
        $this->date = $date;
    }

    /**
     * @return bool
     */
    public function lessThanTenDays(): bool
    {
        return $this->date->diffInDays() <= 10;
    }
}
