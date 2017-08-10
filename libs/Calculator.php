<?php
/*
 * class Calculator

    simle calculator
 *
 * */

class Calculator
{
    private $firstNumber;
    private $secondNumber;
    private $memory;

    
    public function setFirstNumber ($number)
    {
       if (is_numeric($number)) 
       {
           $this->firstNumber = $number;
       } 
       else 
       {
           throw new Exception('Not number');
       }
    }

    public function setSecondNumber ($number)
    {
        if (is_numeric($number)) 
        {
            $this->secondNumber = $number;
        } 
        else 
        {
            throw new Exception('Not number');
        }
    }

    public function getFirstNumber ()
    {
        return $this->firstNumber;
    }

    public function getSecondNumber ()
    {
        return $this->secondNumber;
    }

    public function plus ()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function minus ()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    public function multiply ()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    public function division ()
    {
        if (0 == $this->secondNumber) 
        {
            throw new Exception('Operation does not of permission');
        } 
        else 
        {
            return $this->firstNumber / $this->secondNumber;
        }
    }

    public function mySqrt ($num)
    {
        return sqrt($num);
    }

    public function percent ()
    {
       return $this->firstNumber * $this->secondNumber / 100;
    }

    public function MS ($result)
    {
        $this->memory = $result;
    }

    public function MR () 
    {
        return $this->memory;
    }

    public function MC () 
    {
       unset($this->memory);
    }

    public function MPlus ($num) 
    {
       return $this->memory += $num;
    }

    public function MMinus ($num) 
    {
        return $this->memory -= $num;
    }
}

?>
