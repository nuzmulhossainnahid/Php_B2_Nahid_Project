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
    public function index()
    {
        $this->product = new Product();
       $this->data =$this->product->products();
//       echo '<pre>';
//       print_r($this->data);
//       exit();
        return view('home',['products'=>$this->data]);
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


}
