<?php
namespace Acme\Phase4;

class User
{
    /**
     * @var DateOfBirth
     */
    private $dateOfBirth;

    /**
     * @var DateOfEnter
     */
    private $dateOfEnter;

    /**
     * @param DateOfBirth $dateOfBirth
     * @param DateOfEnter $dateOfEnter
     */
    public function __construct(DateOfBirth $dateOfBirth, DateOfEnter $dateOfEnter)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfEnter = $dateOfEnter;
    }

    /**
     * @return int
     */
    public function age(): int
    {
        return $this->dateOfBirth->age();
    }

    /**
     * @return bool
     */
    public function newUser(): bool
    {
        return $this->dateOfEnter->lessThanTenDays();
    }
}