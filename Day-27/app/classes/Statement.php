<?php

namespace App\classes;

class Statement{
    public $i;
    public $data =[];

    public function forloop()
    {
        $this->data=[
            
            0=>[
            'name'  =>'Nahid',
            'mobile'=>'01212',
            'email' =>'fghhgfjhg@gmail.com'
            ],
            1=>[
            'name'  =>'Hasan',
            'mobile'=>'01212',
            'email' =>'dffdf@gmail.com'
            ]
        ];
        

        foreach($this->data as $key=> $item)
        {
            foreach($item as $value)
            {
                echo $value." ";
            }
            echo'<br/>';
            
        }
        // foreach($this->data[1] as $key=> $item)
        // {
        //     echo $key.":".$item."</br>";
        // }
        // echo $this->data[1]['name'];
        // echo$this->data['name'];
        //for each
        // $this->data = [10,20,30,"Nahid",123,true];
        // foreach($this->data as $item)
        // {
        //     echo $item." </br>";
        // }
        

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