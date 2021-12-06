<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 06-Dec-21
 * Time: 2:43 PM
 */

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;




class Teacher extends User implements ExampleOne, ExampleTwo
{
    public $mobile;
    
    public function __construct()
    {
        $this->mobile = '01737185373';
        $this->name = 'Basis';
        $this->email = 'basis@gmail.com';
    }
    
    public function view()
    {
        echo "User name is $this->name and email address is $this->email And Mobile $this->mobile";
    }
    public function One()
    {
        echo 'This One';
    }
    public function Two()
    {
        echo 'This Two';
    }
    public function Three()
    {
        echo 'This Three';
    }
    public function four()
    {
        echo 'This four';
    }
    public function five()
    {
        echo 'This five';
    }
    
}