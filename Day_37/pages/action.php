<?php


require_once '../vendor/autoload.php';
use App\classes\Person;
use App\classes\Student;



if(isset($_POST['btn']))
{
    $student = new Student($_POST, $_FILES);
    $messege = $student->save();
    include 'home.php';
    
}
elseif (isset($_GET['status']))
{
    if ($_GET['status']=='manage')
    {
        $student1 = new Student();
        $student1->getAllStudentInfo();
    }
}