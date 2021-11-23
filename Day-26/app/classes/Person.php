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
    $this->y=10;
    $this->z=100;

    // echo $this->x += $this->y;
    // echo'<br>';
    // echo $this->x -= $this->y;
    // echo'<br>';
    // echo $this->x /= $this->y;
    // echo'<br>';
    // echo $this->x %= $this->y;
    // echo'<br>';
    // echo $this->x .= $this->y;
    // echo'<br>';

    // echo $this->x < $this->y;
    // echo $this->x < $this->y;
    // echo $this->x === $this->y; 

    /*
    if($this->x > $this->y){
        echo "Hellow world";
    }
    else if($this->z < $this->y){
        echo "Hello BITM";
    }
    else{
        echo "Hello BASIS";
    }
    */
    switch($this->z){
        
        case 5: echo "Hello World";
        break;
        case 6: echo "Hello BITM";
        break;
        case 7: echo "Hello BASIS";
        break;
        case 7: echo "Hello BA";
        break;
        default:echo "This is defult";
    }

    }

    public function test()
    {
        echo'Hello Test';
    }
}