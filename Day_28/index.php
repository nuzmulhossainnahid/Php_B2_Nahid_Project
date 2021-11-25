<?php

require_once './vendor/autoload.php';

    use App\classes\Student;


    $student = new Student();
    $student->index();

    echo $student->name."<br/>";
    echo Student::$location;
    echo Student::test();//Scop resolation proprity
    // echo $student->test();

