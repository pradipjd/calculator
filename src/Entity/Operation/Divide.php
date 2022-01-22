<?php

namespace App\Entity\Operation;

class Divide implements OperationInterface
{
    public static $error = 'Error! Cannot divide by zero';

    /**
     * @param float $firstNumber
     * @param float $secondNumber
     * 
     * @return mixed
     */
    public function calculate($firstNumber, $secondNumber)
    {
        if(0==$secondNumber) {
            return self::$error;
        }

        return $firstNumber / $secondNumber;
    }
}