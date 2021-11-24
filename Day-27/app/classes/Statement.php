<?php

namespace App\classes;

class Statement{
    public $i;
    public $data =[];

    public function forloop()
    {
        $this->data = [10,20,30,"Nahid",123,true];
        foreach($this->data as $item)
        {
            echo $item." </br>";
        }
        

        // //DO While
        // $this->i = 10;
        // do{
        //     echo $this->i."";
        //     $this->i++;
        // }
        // while($this->i<20);
        //while
        // $this->i = 10;
        // while($this->i <30)
        // {
        //     echo $this->i."";
        //     $this->i++;
        // }
        // for
        // for($this->i=0; $this->i <5; $this->i++){
        //     echo'hrllow world</br>';
    //}
    }
}