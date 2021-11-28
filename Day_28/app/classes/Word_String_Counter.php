<?php

namespace App\classes;

class Word_String_Counter
{
    public $firstWord;
    public $Word;
    public $string;

public function __construct($data){
    $this->firstWord = $data['firstWord'];

}


public function index()
    {
        $this->string = str_word_count($this->firstWord);
        return $this->string; 
    }
}