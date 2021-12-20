<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    private $product;
    private $data;
    private $fast_name;
    private $last_name;
    private $full_name;
    protected $i;
    protected $result;
    protected $even;
    private $total_word;
    private $total_char;
    
    
    
    public function index()
    {
        return view('front.home');
    }
    
    public function about()
    {
        return view('about');
    }
    public function registation()
    {
        return view('registation');
    }
    public function newrestater(Request $request)
    
    {
        $this->full_name = $request->first_name.' '.$request->last_name;
        
        return view('registation',['full_name'=>$this->full_name]);
        
//       echo '<pre>';
//       print_r($_POST);
//       echo '</pre>';
    }
    
    
    public function result(Request $request){
        
        for ($this->i=$request->starting_number; $this->i<= $request->ending_number; $this->i++)
        {
            if ($request->choice =='odd')
            {
                if (($this->i%2)!=0)
                {
                    $this->result .= $this->i .' ';
                }
                
                
            }
            elseif ($request->choice =='even')
            {
                if (($this->i%2)==0)
                {
                    $this->result .= $this->i .' ';
                }
            }
            
            
        }
        return view('about',['result'=> $this->result]);
    }
    public function count()
    {
        return view('count');
    }
    public function countResult(Request $request)
    {
    $this->total_word =str_word_count($request->given_string);
    $this->total_char =strlen(str_replace(' ','',$request->given_string));
    
    
    return view('count',
        [
        'word' => "Total Word = ".$this->total_word,
        'char' => "Total Char = ".$this->total_char
    ]);
    }
    
//    php artisan make:controller CategoryController -r
//php artisan route:list


}
