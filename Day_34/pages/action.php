<?php
require_once '../vendor/autoload.php';



use App\classes\primeNumber;
use App\classes\Auth;






if(isset($_POST['primeBtn']))
{

    $primeNumber = new primeNumber($_POST);
    $result =  $primeNumber->index();
    include 'prime.php';
}

else if(isset($_POST['loginBtn']))
{
    $auth = new Auth($_POST);
   $message = $auth->login();
   include 'login.php';
}

else if(isset($_GET['status']))
{
    if($_GET['status'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}








else{
    header('Location: prime.php');
}
