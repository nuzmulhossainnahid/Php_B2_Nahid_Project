<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/12/2021
 * Time: 2:33 PM
 */

namespace App\classes;


class Database
{
    private $hostName;
    private $userName;
    private $password;
    private $link;
    private $dbName;


    protected function connection()
    {

        $this->hostName = 'localhost';
        $this->userName = 'root';
        $this->password = '';
        $this->dbName = 'example_two';



        $this->link = mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbName);
        if($this->link)
        {
            return $this->link;
        }else{
            die('connection Problem..');
        }
    }

}