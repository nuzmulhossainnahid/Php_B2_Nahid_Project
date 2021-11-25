<?php

namespace App\classes;

class Student
{
    public $name = 'BITM';
    public static $location = 'Karwanbazer';

    public function index()
    {
        echo 'Hellow World!!!!';
    }

    public static function test()
    {
        echo 'Hello Static';
    }
}