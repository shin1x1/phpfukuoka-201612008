<?php
namespace Acme\Phase2;

use Acme\Test\SetupTrait;

class UserTest extends \PHPUnit_Framework_TestCase
{
    use SetupTrait;

    /**
     * @test
     */
    public function age()
    {
        $sut = new User(DateOfBirth::create(2000, 1, 1));

        $this->assertSame(16, $sut->age());
    }
}