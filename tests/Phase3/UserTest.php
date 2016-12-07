<?php
namespace Acme\Phase3;

use Acme\Test\SetupTrait;
use Cake\Chronos\Date;

class UserTest extends \PHPUnit_Framework_TestCase
{
    use SetupTrait;

    /**
     * @test
     */
    public function age()
    {
        $sut = new User(new DateOfBirth(Date::create(2000, 1, 1)));

        $this->assertSame(16, $sut->age());
    }
}