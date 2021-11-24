<?php

namespace App\classes;
use App\classes\student;




class User extends student{
        public $username;
        public $password;
        public $token;

        public function login(){
            echo $this->three();
        }
        public function __construct($data)
{
    echo '$data;
}

}



class User
{
    public $username;
    public $password;
    public $token;

    public function login(){
        echo "In Login";
    }
    public function logout(){
        echo "In Logout";
    }
    public function changepassword(){
        echo "In change Password";
    }

}