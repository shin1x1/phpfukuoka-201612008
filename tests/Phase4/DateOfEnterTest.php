<?php
namespace Acme\Phase4;

use Acme\Test\SetupTrait;
use Cake\Chronos\Date;

class DateOfEnterTest extends \PHPUnit_Framework_TestCase
{
    use SetupTrait;

    /**
     * @test
     * @dataProvider dataProviderForLessThanTenDays
     * @param bool $expected
     * @param int $month
     * @param int $day
     */
    public function lessThanTenDays(bool $expected, int $month, int $day)
    {
        $sut = new DateOfEnter(Date::createFromDate(2016, $month, $day));

        $this->assertSame($expected, $sut->lessThanTenDays());
    }

    /**
     *
     */
    public function dataProviderForLessThanTenDays(): array
    {
        return [
            [false, 11, 27],
            [true, 11, 28],
        ];
    }
}
