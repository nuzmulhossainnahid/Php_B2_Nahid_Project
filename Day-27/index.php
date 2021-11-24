<?php

require_once './vendor/autoload.php';
    use App\classes\Statement;
    use App\classes\student;
    use App\classes\User;
    $user = new User();

   
  

    $student = new student();
    echo $user->login();
    // echo $student->name;
    // echo $student->three();
    // echo $user;

    // $loop = new Statement(); 
    // $loop->forloop();



