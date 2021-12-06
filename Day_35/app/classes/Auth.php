<?php


namespace App\classes;
use App\classes\User;


class Auth
{
    private $email;
    private $password;
    private $user;
    private $data;
    
    
    public function __construct($data = null)
    {
        if($data)
        {
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
    }
    
    
    public function index()
    {
        header('Location: ./pages/login.php');
        
    }
    
    
    public function login()
    {
    $this->user= new User();
    $this->data= $this->user->getAllUser();
    
    foreach ($this->data as $item)
    {
        if ($item['email']==$this->email && $item['password']==$this->password)
        {
            session_start();
            $_SESSION['id']=$item['id'];
            $_SESSION['name']=$item['name'];
            header('Location: home.php');
            
        }
    }
    return "Sorry Email or Password Not Correct";
    
    }
}