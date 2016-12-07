<?php
namespace Acme\Phase4;

use Acme\Test\SetupTrait;
use Cake\Chronos\Date;

class UserTest extends \PHPUnit_Framework_TestCase
{
    use SetupTrait;

    /**
     * @test
     */
    public function isNewUser()
    {
        $sut = new User(
            new DateOfBirth(Date::create(2000, 1, 1)),
            new DateOfEnter(Date::create(2016, 11, 27))
        );

        $this->assertTrue($sut->newUser());
    }

    /**
     * @test
     */
    public function isNotNewUser()
    {
        $sut = new User(
            new DateOfBirth(Date::create(2000, 1, 1)),
            new DateOfEnter(Date::create(2016, 11, 26))
        );

        $this->assertFalse($sut->newUser());
    }
}