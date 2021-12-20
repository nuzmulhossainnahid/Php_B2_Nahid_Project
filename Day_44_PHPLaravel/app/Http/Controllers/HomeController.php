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
    public function checkout()
    {
        return view('front.checkout');
    }
    public function cart()
    {
        return view('front.cart');
    }
    public function login()
    {
        return view('front.login');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function blogSingle()
    {
        return view('front.blogSingle');
    }
    public function contactUs()
    {
        return view('front.contactUs');
    }
    public function not404()
{

}
    
}