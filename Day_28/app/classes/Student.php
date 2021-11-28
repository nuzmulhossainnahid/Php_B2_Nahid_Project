<?php

namespace App\classes;


class Student
{
    public $name = 'BITM';
    public static $location = 'Karwanbazer';

    public $firstName;
    public $lastName;
    public $fullName;
    public $wordCount;


    public function __construct($data){
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];

    }

    public function index()
    {
        // $this->fullName = $this->firstName." ".$this->lastName;
        $this->wordCount = str_word_count($this->firstName);
        return $this->wordCount; 
    }

    public static function test()
    {
        echo self::$location;
    }
}