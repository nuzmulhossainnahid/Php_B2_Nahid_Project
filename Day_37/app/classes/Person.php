<?php

namespace App\classes;


class Person
{
    private $name;
    private $email;
    private $mobile;
    private $connection;
    private $sql;
    public $message;

    public function  __construct($data = null)
    {
        if($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
        }
    }


    public function save()
    {

        $this->connection =  mysqli_connect('localhost', 'root', '', 'example_two');
//      echo '<pre>';
//      print_r($this->connection);
//      echo '</pre>';

        if($this->connection)
        {
            $this->sql = "INSERT INTO test(name, email, mobile) VALUES('$this->name', '$this->email', '$this->mobile')";
            mysqli_query($this->connection, $this->sql);


        }
        return 'Student info save successfully';
    }
}