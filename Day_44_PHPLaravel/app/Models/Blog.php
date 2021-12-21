<?php

namespace App\Models;

use App\Http\Controllers\BlogController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    private static $blog;
    use HasFactory;
    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->author_name = $request->author_name;
        self::$blog->description = $request->description;
        self::$blog->image = '';
        self::$blog->save();
    }
}
