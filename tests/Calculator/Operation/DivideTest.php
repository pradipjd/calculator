<?php

namespace App\Tests\Calculator\Operation;

use PHPUnit\Framework\TestCase;
use App\Entity\Operation\Divide;

class DivideTest extends TestCase
{
    public function testDivide(): void
    {
        $add = new Divide();
        $result = $add->calculate(4, 2);

        $this->assertEquals(2, $result);
    }
}