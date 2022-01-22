<?php

namespace App\Tests\Calculator\Operation;

use PHPUnit\Framework\TestCase;
use App\Entity\Operation\Multiply;

class MultiplyTest extends TestCase
{
    public function testMultiply(): void
    {
        $add = new Multiply();
        $result = $add->calculate(4, 2);

        $this->assertEquals(8, $result);
    }
}