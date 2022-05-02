<?php

class calculator
{
    private $num1,$num2,$operator,$output;

    public function setNum($num1,$num2)
    {
        $this->num1 =$num1;
        $this->num2=$num2;
    }

    public function setoperator($operator)
    {
        $this->operator =$operator;
    }
    public function addition(a,b)
    {
        return a+b;
    }
    public function multiplication(a,b)
    {
        return a*b;
    }
    public function subtraction(a,b)
    {
        return a-b;
    }
    public function division(a,b)
    {
        return a/b;
    }
    // public function calculate()
    // {
    //     if($this->operator == "+")
    //         $this->output =$this->num1 + $this->num2;
    //     elseif($this->operator == "-")
    //        $this->output =$this->num1 - $this->num2;
    //     else
    //         $this->output ="An Error Occured";
    // }
    public function getoutput()
    {
        return $this->output;
    }   
    public function getNum1()
    {
        return $this->num1;
    }   
    public function getNum2()
    {
        return $this->num2;
    }   
}
?>
