<?php


namespace App\classes;


class ImageUpload
{
    public $value;
    public $directory;
    public $result = [];


    public function __construct($data)
    {
        $this->value = $data;
    }

    public function index(){
//        echo '<pre>';
//        print_r($this->value);
//        print_r($_FILES);
//        echo '</pre>';

    $this->directory = '../assets/img/upload/'.$_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);

      $this->result = [
          'name' => $this->value['name'],
            'image' => $this->directory,
        ];
      return $this->result;
    }
}