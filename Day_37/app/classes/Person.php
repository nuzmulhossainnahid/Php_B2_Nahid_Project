<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 07-Dec-21
 * Time: 5:00 PM
 */

namespace App\classes;


class Person
{
    private $name;
    private $email;
    private $mobile;
    private $connection;
    private $sql;
    
    
    public function __construct($data= null)
    {
        if($data){
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
            
        }
    }
    
    public function save()
    {
        $this->connection = mysqli_connect('localhost','root','','exaple_two');
       
        if ($this->connection)
        {
            $this->sql = "INSERT INTO test(name, email,mobile) VALUES('$this->name','$this->email','$this->mobile')";
            mysqli_query($this->connection,$this->sql);
            echo 'Success';
            
        }
    }
}