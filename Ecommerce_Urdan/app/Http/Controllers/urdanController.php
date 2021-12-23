<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urdanController extends Controller
{
    public function index()
    {
        return view('font.home.home');
    }
}
