<?php
namespace Acme\Test;

use Cake\Chronos\Date;

/**
 * @package Acme\Test
 */
trait SetupTrait
{
    public function setUp()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        parent::setUp();

        Date::setTestNow(Date::create(2016, 12, 8));
    }
}