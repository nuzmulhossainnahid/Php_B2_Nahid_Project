<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 02-Dec-21
 * Time: 2:32 PM
 */

namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $mobile;
    private $filepath;
    private $file;
    private $data;
    private $array;
    private $array1;
    private $array2;
    
    
    public function __construct($data=null)
    {
        if($data) {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
        }
        $this->filepath = './db.txt';
        
    }
    
    public function index()
    {
        $this->filepath = './db.txt';
        $this->file = fopen($this->filepath, 'a');
        $this->data = " $this->name, $this->email, $this->mobile#";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'student info save successfully';
    }
    
    public function getAllStudentInfo()
    {
       
       $this->data=  file_get_contents($this->filepath);
       $this->array= explode("#", $this->data);
       echo '<pre>';
       print_r($this->array);
       echo '</pre>';
    }
}