<?php


namespace App\classes;


class FullName
{
    public $firstName, $lastName, $result;

    public function __construct($data)
    {
        if ($data)
        {
            $this->firstName = $data['first_name'];
            $this->lastName = $data['last_name'];
        }

    }

    public function index ()
    {
        return $this->firstName.' '.$this->lastName;
    }
}