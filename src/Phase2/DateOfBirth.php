<?php
namespace Acme\Phase2;

use Cake\Chronos\Date;

class DateOfBirth extends Date
{
    /**
     * @return int
     */
    public function age(): int
    {
        return $this->age;
    }
}
