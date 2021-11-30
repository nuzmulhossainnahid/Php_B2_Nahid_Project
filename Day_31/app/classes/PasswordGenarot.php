<?php

namespace App\classes;


class PasswordGenarot
{
    public $givenLength;
    
    public function __construct($data)
    {
        $this->givenLength = $data['given_length'];
    }
    public function index()
    {
        echo $this->givenLength;
    }
}