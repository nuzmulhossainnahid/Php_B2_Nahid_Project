<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 06-Dec-21
 * Time: 4:14 PM
 */

namespace App\classes;


abstract class ExampleThree
{
    
    public $valueOne;
    public $valueTwo;
    
    public function __construct()
    {
        $this->valueOne=100;
        $this->valueTwo =200;
    }
    
    public function ten()
    {
        $this->valueOne=100;
        echo $this->valueOne;
    }
    abstract function twenty();
}