<?php

namespace App\classes;

class ExampleOne
{
    public $givenString;
    public $totalWord;
    public $totalChar;
    public $result = [];

    public function __construct($data)
    {
        $this->givenString = $data['given_string'];
    }

    
    public function index()
    {
        $this->totalWord =  str_word_count($this->givenString);
        $this->totalChar =  strlen($this->givenString);
        $this->result = [
            'total_word'=> 'Total Word: '.$this->totalWord,
            'total_char'=> 'Total Char: '.$this->totalChar,
        ];
        
        return $this->result;
        
    }
}