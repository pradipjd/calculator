<?php

namespace App\Tests\Calculator\Operation;

use PHPUnit\Framework\TestCase;
use App\Entity\Operation\Subtract;

class SubtractTest extends TestCase
{
    public function testSubtract()
    {
        $add = new Subtract();
        $result = $add->calculate(40, 20);

        $this->assertEquals(20, $result);
    }
}