<?php
namespace Acme\Phase1;

use Cake\Chronos\Date;

class User
{
    /**
     * @var Date
     */
    private $dateOfBirth;

    /**
     * @param Date $dateOfBirth
     */
    public function __construct(Date $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return int
     */
    public function age(): int
    {
        return $this->dateOfBirth->age;
    }
}