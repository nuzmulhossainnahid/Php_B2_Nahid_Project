<?php

namespace App\classes;


class User
{
    public $name;
    public $email;
    
    public function __construct()
    {
        $this->name = 'BITM';
        $this->email = 'info@bitm.org.bd';
    }
    
    
    public function index(){
        $this->name = 'BITM';
        $this->email = 'info@bitm.org.bd';
        return "User name is $this->name and email address is $this->email";
        
    }
    
}