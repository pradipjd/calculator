<?php

namespace App\Tests\Calculator\Operation;

use PHPUnit\Framework\TestCase;
use App\Entity\Operation\Divide;

class DivisionByZeroTest extends TestCase
{
    public function testDivisionByZero(): void
    {
        $add = new Divide();
        $result = $add->calculate(4, 0);

        $this->assertEquals(Divide::$error, $result);
    }
}