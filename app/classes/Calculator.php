<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $lastNumber, $operator, $result;

    public function __construct($post)
    {
        if ($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->operator = $post['operator'];
        }
    }

    public function index ()
    {
        switch ($this->operator)
        {
            case '+' : $this->result = $this->addition();
                        break;
            case '-' : $this->result = $this->substraction();
                        break;
            case '*' : $this->result = $this->multiplication();
                        break;
            case '/' : $this->result = $this->division();
                        break;
            case '%' : $this->result = $this->modulus();
                        break;
        }
        return $this->result;
    }

    public function addition ()
    {
        return $this->firstNumber + $this->lastNumber;
    }
    public function substraction ()
    {
        return $this->firstNumber - $this->lastNumber;
    }
    public function multiplication ()
    {
        return $this->firstNumber * $this->lastNumber;
    }
    public function division ()
    {
        return $this->firstNumber / $this->lastNumber;
    }
    public function modulus ()
    {
        return $this->firstNumber % $this->lastNumber;
    }
}