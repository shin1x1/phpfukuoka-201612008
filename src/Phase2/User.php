<?php
namespace Acme\Phase2;

class User
{
    /**
     * @var DateOfBirth
     */
    private $dateOfBirth;

    /**
     * @param DateOfBirth $dateOfBirth
     */
    public function __construct(DateOfBirth $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return int
     */
    public function age(): int
    {
        return $this->dateOfBirth->age();
    }
}