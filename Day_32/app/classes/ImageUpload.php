<?php


namespace App\classes;


class ImageUpload
{
    protected $post;
    protected $file;
    protected $imageName;
    protected $filetype;
    protected $check;
    
    protected $directory;
//    public $result = [];


    public function __construct($data, $file)
    {
        $this->post = $data;
        $this->file = $file;
    }

    public function index(){
//        echo '<pre>';
//        print_r($this->file);
////        print_r($_FILES);
//        echo '</pre>';
        
        $this->imageName= $this->file['image']['name'];
        $this->directory = '../assets/img/upload/'.$this->imageName;
        
        $this->filetype= pathinfo($this->imageName, PATHINFO_EXTENSION);
        
        $this->check = getimagesize($this->file['image']['tmp_name']);
        
        if ($this->check)
        {
            if(!file_exists($this->directory))
            {
                if($this->filetype=='jpg' || $this->filetype=='png')
                {
                    move_uploaded_file($this->file['image']['tmp_name'],$this->directory);
                }
                else{
                    echo 'Your file type is wrong:: Please try again';
                }
            }
            else {
                die ('File is exists');
            }
            
        }
        else{
            echo 'insert image';
        }
        
    }
}