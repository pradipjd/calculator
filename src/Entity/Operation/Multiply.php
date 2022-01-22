<?php

namespace App\Entity\Operation;

class Multiply implements OperationInterface
{
    /**
     * @param float $firstNumber
     * @param float $secondNumber
     * 
     * @return mixed
     */
    public function calculate($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }
}