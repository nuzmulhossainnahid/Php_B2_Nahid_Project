<?php

namespace App\classes;

class Pattern
{
        public $n=5;
        public $i;
        public $j;

    public function patternOne()
    {
       
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
       
        for ($this->i = $this->n-1; $this->i >=0;  $this->i--)
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