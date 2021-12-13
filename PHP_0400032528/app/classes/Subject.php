<?php
namespace App\classes;


use App\classes\Database;

class Subject extends Database
{
    private $data= [];
    private $i;
    private $row;
    private $queryResult;
    private $sql;
    private $con;
    private $studentId;
    private $subject= [];



    public function __construct($data = null)
    {
        $this->con = $this->connection();
        if($data)
        {
            $this->subject = $data['subject'];

        }
    }


    public function index()
    {

        $this->con;
        $this->sql = "SELECT * FROM users WHERE user_type = 2";

        if( $this->queryResult = mysqli_query($this->con, $this->sql))
        {
            $this->i = 0;
            while($this->row = mysqli_fetch_assoc($this->queryResult) )
            {
                $this->data[$this->i]['id'] = $this->row['id'];
                $this->data[$this->i]['name'] = $this->row['name'];
                $this->i++;
            }
            return $this->data;
        }else{
            die('Query Problem..'.mysqli_error($this->con));
        }


    }

    public function addSubject()
    {
        foreach ($this->subject as $item)
        {
            $this->sql = "INSERT INTO subjects (subject) VALUES ('$item')";
            mysqli_query($this->con, $this->sql);
        }
    }


    public function getMySubject()
    {
        $this->sql = "SELECT * FROM subjects";
        if($this->queryResult = mysqli_query($this->con, $this->sql))
        {
            while($this->row = mysqli_fetch_assoc($this->queryResult))
            {
                array_push($this->data, $this->row['subject']);

            }
            return $this->data;
        }else{
            die('Query problem..'.mysqli_error($this->con));
        }
    }

}