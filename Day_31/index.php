<?php

require_once './vendor/autoload.php';

use App\classes\Home;


$home = new Home();
echo $home->index();



