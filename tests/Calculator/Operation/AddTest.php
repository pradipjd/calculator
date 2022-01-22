<?php

namespace App\Tests\Calculator\Operation;

use PHPUnit\Framework\TestCase;
use App\Entity\Operation\Add;

class AddTest extends TestCase
{
    public function testAdd(): void
    {
        $add = new Add();
        $result = $add->calculate(15, 25);

        $this->assertEquals(40, $result);
    }
}