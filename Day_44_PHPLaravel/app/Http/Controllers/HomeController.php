<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    
    public function category()
    {
        return view('front.category');
    }
    
    
    public function productdetails()
    {
        return view('front.productdetails');
    }
    
}