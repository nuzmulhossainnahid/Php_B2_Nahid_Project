<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urdanController extends Controller
{
    public function index()
    {
        return view('font.home.home');
    }
    
    public function about()
    {
        return view('font.about.about');
    }
    public function contactUs()
    {
        return view('font.contact.contact');
    }
}
