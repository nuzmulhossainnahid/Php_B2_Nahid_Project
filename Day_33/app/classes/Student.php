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
    private $imageFile;
    private $directory;
    private $imagename;
    
    
    public function __construct($data=null,$file=null)
    {
        if($data && $file) {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
            
            $this->imageFile =$file;
        }
        $this->filepath = './db.txt';
        
    }
    
    public function index()
    {
        $this->imagename =$this->imageFile['image']['name'];
        $this->directory ='../assets/img/upload'.$this->imagename;
        move_uploaded_file($this->imageFile['image']['tmp_name'], $this->directory);
        
        $this->filepath = './db.txt';
        $this->file = fopen($this->filepath, 'a');
        $this->data = "$this->name,$this->email,$this->mobile,$this->directory#";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'student info save successfully';
    }
    
    public function getAllStudentInfo()
    {
       
       $this->data=  file_get_contents($this->filepath);
       $this->array= explode("#", $this->data);
//       echo '<pre>';
//       print_r($this->array);
//       echo '</pre>';

        foreach ($this->array as $key => $value)
        {
            if ($value)
            {
                $this->array1 = explode(",", $value);
                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['mobile'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }
        }
        return $this->array2;
        
        
    }
}