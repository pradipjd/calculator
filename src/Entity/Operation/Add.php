<?php

namespace App\Entity\Operation;

class Add implements OperationInterface
{
    /**
     * @param float $firstNumber
     * @param float $secondNumber
     * 
     * @return mixed
     */
    public function calculate($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }
}