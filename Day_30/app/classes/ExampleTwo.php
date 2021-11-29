<?php

namespace App\classes;

class ExampleTwo
{
    public $starting_number;
    public $ending_number;
    public $incr_decr;
    public $result;
    public $i;

    public function __construct($data)
    {
        $this->starting_number = $data['starting_number'];
        $this->ending_number = $data['ending_number'];
        $this->incr_decr = $data['incr_decr'];
    }

    
    public function index()
    {
        for($this->i=$this->starting_number;$this->i <= $this->ending_number; $this->i+=$this->incr_decr)
        {
            $this->result.=$this->i .' ';
        }
        return $this->result;
        
    }
}