<?php

namespace App\Entity\Operation;

interface OperationInterface
{
    public function calculate($firstNumber, $secondNumber);
}