<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index()
   {
       return view('blog.add');
   }
   public function create(Request $request)
   {
       Blog::newBlog($request);
       return redirect()->back()->with('message','Blog info create successful');
   
   }
}
