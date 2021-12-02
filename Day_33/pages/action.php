<?php


require_once '../vendor/autoload.php';

use App\classes\Student;

if(isset($_POST['btn']))
{
    $student = new Student($_POST);
    $message= $student->index();
    include 'home.php';
}

else if(isset($_GET['status']))
{
    if ($_GET['status']=='manage')
    {
       $student= new Student();
       $student->getAllStudentInfo();
    }
}
else{
    header('Location: home.php');
}


