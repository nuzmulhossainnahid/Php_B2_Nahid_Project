<?php

namespace App\classes;
class Auth
{
    private $email;
    private $password;
    private $link;
    private $queryResult;
    private $sql;
    private $user;
    private $user_type;


    public function __construct($data = null)
    {
        if($data)
        {
            $this->email = $data['email'];
            $this->password = md5($data['password']);

        }
    }


    public function index()
    {
        header('Location: pages/login.php');
    }


    public function login()
    {
//    echo $this->email.'<br/>'.md5($this->password);
        $this->link = mysqli_connect('localhost', 'root', '', 'exam_2');
        if($this->link)
        {
            $this->sql = "SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'";
            if(mysqli_query($this->link, $this->sql))
            {
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->user = mysqli_fetch_assoc($this->queryResult);
                if($this->user)
                {
                    session_start();
                    $_SESSION['id'] = $this->user['id'];
                    $_SESSION['name'] = $this->user['name'];
                    $_SESSION['user_type'] = $this->user['user_type'];

                    header('Location: dashboard.php');

                }else
                {
                    return 'Sorry incorrect email or Password';
                }


            }else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }

    }


    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['user_type']);
        header('Location: ../index.php');
    }
}