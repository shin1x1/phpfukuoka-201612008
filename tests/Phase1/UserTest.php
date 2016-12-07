<?php
namespace Acme\Phase1;

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
        $sut = new User(Date::create(2000, 1, 1));

        $this->assertSame(16, $sut->age());
    }
}