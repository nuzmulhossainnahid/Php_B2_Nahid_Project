<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 30-Nov-21
 * Time: 2:34 PM
 */

namespace App\classes;


class Home
{
    public function index()
    {
        header('Location: pages/home.php');
    }
}