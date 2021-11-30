<?php

namespace App\classes;


class PasswordGenarot
{
    public $givenLength;
    public $passwordData = [];
    public $lastIndex;
    public $password;
    public $i;
    public $index;
    
    
    public function __construct($data)
    {
        $this->givenLength = $data['given_length'];
    }
    public function index()
    {
        $this->passwordData=['A','a','@','$','1','0','*','+','!','T','P'];
        $this->lastIndex=count($this->passwordData -1);
        
        for($this->i = 1;$this->i<=$this->passwordData;$this->i++)
        {
            $this->index = rand(0, $this->lastIndex );
            $this->password = $this->passwordData[$this->index];
        }
    }
}