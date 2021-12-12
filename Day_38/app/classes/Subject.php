<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12-Dec-21
 * Time: 2:17 PM
 */

namespace App\classes;
use App\classes\Database;


class Subject extends Database
{
    private $data = [];
    private $i;
    private $result;
    private $con;
    private $sql;
    private $queryresult;
    private $row;
    
    public function __construct()
    {
        $this->con = $this->connection();
    }
    
    public function index()
    {
        $this->sql = "SELECT * FROM students WHERE user_type=0";
        if ($this->queryresult=mysqli_query($this->con, $this->sql))
        {
            
            $this->i =0;
        while ($this->row = mysqli_fetch_assoc($this->queryresult))
        {
            $this->data[$this->i]['id']  = $this->row['id'];
            $this->data[$this->i]['name']  = $this->row['name'];
            $this->i++;
        }
        return $this->data;
        
        }
        else
        {
            die('Query Problem'.mysqli_error($this->con));
        }
       
    }
    
}