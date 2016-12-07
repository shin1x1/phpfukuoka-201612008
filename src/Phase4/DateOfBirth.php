<?php
namespace Acme\Phase4;

use Cake\Chronos\Date;

class DateOfBirth
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
     * @return int
     */
    public function age(): int
    {
        return $this->date->age;
    }
}
