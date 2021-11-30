<?php

require_once '../vendor/autoload.php';

use App\classes\PasswordGenarot;

if(isset($_POST['btn']))
{
    $passwordGenarot = new PasswordGenarot($_POST);
    $passwordGenarot->index();
}