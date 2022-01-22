<?php

namespace App\Entity;

use App\Entity\Operation\Add;
use App\Entity\Operation\Divide;
use App\Entity\Operation\Multiply;
use App\Entity\Operation\Subtract;
use Symfony\Component\Validator\Constraints as Assert;

class Calculator
{

    /**
     * @Assert\Type("string")
     */
    public $firstNumber;

    /**
     * @Assert\Type("string")
     */
    public $secondNumber;

    /**
     * @Assert\Choice({"add", "subtract", "multiply", "divide"})
     */
    public $operand;

    /**
     * @return float
     */
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    /**
     * @param float $firstNumber
     */
    public function setFirstNumber($firstNumber)
    {
        $this->firstNumber = $firstNumber;
    }

    /**
     * @return float
     */
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }

    /**
     * @param float $secondNumber
     */
    public function setSecondNumber($secondNumber)
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * @return float
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * @param string $operand
     */
    public function setOperand($operand)
    {
        $this->operand = $operand;
    }

    public function performCalculation()
    {
        switch ($this->getOperand()) {
            case "add":
                $operation = new Add();
                break;
            case "subtract":
                $operation = new Subtract();
                break;
            case "multiply":
                $operation = new Multiply();
                break;
            case "divide":
                $operation = new Divide();
                break;
        }

        return $operation->calculate($this->getFirstNumber(), $this->getSecondNumber());
    }
}