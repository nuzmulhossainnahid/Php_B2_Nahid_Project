<?php

namespace App\classes;

class Pattern
{
        public $n;
        public $i;
        public $j;

    public function patternOne()
    {
        $this->n=4;
        for ($this->i = 1; $this->i <=$this->n;  $this->i++)
        {
            for ($this->j = 1; $this->j <=($this->n*2)-1;  $this->j++)
            {
                if(($this->j>= $this->n - ($this->i -1)) && ($this->j<=$this->n + ($this->i-1)))
                {
                    echo '*';
                }
                else{
                    echo '&nbsp;&nbsp;';
                }
            }
            
            echo'</br>';
        }
        


    }
}