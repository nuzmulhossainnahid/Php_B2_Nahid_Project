<?php

namespace App\classes;

class Person
{
    public $first_name;
    public $last_name;
    public $x;
    public $y;
    public $z;

    public function index()
    {
    //     $this->first_name = 235.5;
    //     $this->last_name = 'BASIS';
    //    // echo $this->first_name.' '.$this->last_name;
    //    echo gettype($this->first_name);
    // $this->test();
    /*Operator
        Arithemitc Operator
    */
    $this->x=10;
    $this->y=20;

    echo $this->x + $this->y;
    echo'<br>';
    echo $this->x - $this->y;
    echo'<br>';
    echo $this->x * $this->y;
    echo'<br>';
    echo $this->x / $this->y;
    echo'<br>';
    echo $this->x % $this->y;
    echo'<br>';
    echo'<br>';
    echo'<br>';
    echo'<br>';
    echo'<br>';
    echo'<br>';
    echo $this->x && $this->y;
    echo'<br>';
    echo $this->x || $this->y;
    echo'<br>';
    echo $this->x < $this->y;
    echo'<br>';
    echo $this->x > $this->y;
    echo'<br>';
    echo $this->x == $this->y;
    echo'<br>';
    }


    public function test()
    {
        echo'Hello Test';
    }
}