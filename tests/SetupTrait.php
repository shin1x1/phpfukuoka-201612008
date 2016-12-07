<?php
namespace Acme\Test;

use Cake\Chronos\Chronos;

/**
 * @package Acme\Test
 */
trait SetupTrait
{
    public function setUp()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        parent::setUp();

        Chronos::setTestNow(Chronos::create(2016, 12, 8, 12, 34, 56));
    }
}