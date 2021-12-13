<?php
namespace App\classes;
class Student
{
    private $name;
    private $email;
    private $password;
    private $mobile;
    private $link;
    private $sql;
    private $queryResult;
    private $data = [];
    private $row;
    private $i;
    private $user_type;
    
    public function __construct($data = null)
    {
        if ($data) {
            $this->name = $data['name'];
            if (isset($data['password'])) {
                $this->password = md5($data['password']);
            }
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
            $this->user_type = $data['user_type'];
        }
        
    }
    
    
    public function save()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'exam_2');
        if ($this->link) {
            $this->sql = "INSERT INTO users (name, email, password, mobile, user_type) VALUES ('$this->name', '$this->email', '$this->password', '$this->mobile', '$this->user_type')";
            if (mysqli_query($this->link, $this->sql)) {
                return 'Registation successfully';
            } else {
                die('Query problem..' . mysqli_error($this->link));
            }
        }
    }
    
    public function getAllStudentInfo()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'exam_2');
        if ($this->link) {
            $this->sql = "SELECT * FROM users WHERE user_type = 2";
            if (mysqli_query($this->link, $this->sql)) {
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i = 0;
                while ($this->row = mysqli_fetch_assoc($this->queryResult)) {
                    $this->data[$this->i]['id'] = $this->row['id'];
                    $this->data[$this->i]['name'] = $this->row['name'];
                    $this->data[$this->i]['email'] = $this->row['email'];
                    $this->data[$this->i]['mobile'] = $this->row['mobile'];
                    $this->i++;
                }
                return $this->data;
            } else {
                die('Query problem..' . mysqli_error($this->link));
            }
        }
    }
    
    
    public function getStudentInfoById($id)
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'exam_2');
        $this->sql = "SELECT * FROM students WHERE id='$id'";
        $this->queryResult = mysqli_query($this->link, $this->sql);
        return mysqli_fetch_assoc($this->queryResult);
    }
    
}